/*@@
   @file      IsoSurfacer.c
   @date      Wed Oct  8 11:30:45 MET 2000
   @author    Joe Blow
   @desc
   Gutted original isosurfacer code from SC97.
   Has completely new implementation for marching
   cubes and sockets are integrated in Sockets.c
   rather than coming from TCP++ or other external
   modules.
   @enddesc
 @@*/

#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <assert.h>

#include "cctk.h"
#include "cctk_DefineThorn.h"
#include "cctk_Parameters.h"
#include "util_Table.h"

#ifdef CACTUSPUGH_PUGH
#include "CactusPUGH/PUGH/src/include/pugh.h"
#endif

#include "IsoSurfacerGH.h"
#include "IsoSurfacerInit.h"
#include "NuSurfacer.h"

static const char *rcsid = "$Id: IsoSurfacer.c,v 1.1 2005/02/25 14:36:38 dstark Exp $";
CCTK_FILEVERSION(CactusPUGHIO_IsoSurfacer_IsoSurfacer_c)

/* *******Some Macro Definitions *************/
#define NEW(n,what) malloc((n)*sizeof(what))
#define REALLOC(object,n,what) \
  if((object) != NULL) free(object); \
  (object) = NEW(n,what); \
  if((object) == NULL) printf("IsoSurfacer: REALLOC failed!\n")

#define Append_Or_EnlargeAndAppend(outs, tmps) \
q = p; \
if( (p += strlen(tmps)) >= lfs ) \
{ \
    (outs) = (realloc((void *)(outs), 2 * lfs * sizeof(char))); \
    lfs *= 2; \
} \
strcpy(&(outs)[q], (tmps))
/* ***** Some function forward declarations ***** */
static void CollectData(const cGH *GH, polypatch *perprocessor, polypatch *totals);
static void WriteBin(const cGH *GH, polypatch *totals,isosurfacerGH *myGH,
                     const char *fullname, CCTK_REAL4 isolevel);
static void WriteVRML(const cGH *GH, polypatch *totals,
                      const char *fullname, CCTK_REAL4 isolevel);
static void WriteASCII(const cGH *GH, polypatch *totals,
                      const char *fullname, CCTK_REAL4 isolevel);
static void WriteUCD(const cGH *GH, polypatch *totals,
                      const char *fullname, CCTK_REAL4 isolevel);
static void WriteSock(const cGH *GH, polypatch *totals, isosurfacerGH *myGH,
                       const char *fullname, int isoindex, CCTK_REAL4 isolevel);
static void WriteHDF5(const cGH *GH, polypatch *totals, isosurfacerGH *myGH,
                       const char *fullname, int isoindex, CCTK_REAL4 isolevel);

/***************************************************************************/
static int IsoSurfacerHandleCommands(const cGH *GH)
{
  DECLARE_CCTK_PARAMETERS
  IsoCommand *Iso_PollCommand(const cGH *cctkGH,IsoCommand *cmd);
  IsoCommand command;
#ifdef CCTK_MPI
  CCTK_REAL new_isovalue;
#endif
  isosurfacerGH *myGH = (isosurfacerGH *) GH->extensions [CCTK_GHExtensionHandle ("IsoSurfacer")];
  if(!myGH->RunIsoSurfacer) return 0; /* not running */

  /* Grab all events that are waiting in queue */
  /*
    0)For each command bcast catenated string to all
    processors

    Command to change existing isovalue is of format
    "isosurf",<gridname>[<instance>],<newvalue>
    1) Select GF
    2) Scan for tag (if any)
    If tag does not exist, create one
    3) change value of existing tag.
    Command to remove existing surface is of format
    "isosurf",<gridname>[<instance>],"delete"
    1) Select GF with scan
    2) Scan for tag (if any)
    3) remove existing tag
    Command to create new isosurface instance
    "isosurf",<gridname>[<newinstancetag]>],<value>
    1) Select GF
    2) Scan for tag (if any)
    3) If no tag, create new entry
    Command to create Slice Plane
    "slice",<gridname>[<newinstancestring>],<coords>
    Coords are just 2ints + 6 floats
    2ints are the width and height.  6floats are
    Just 2 corners of diagonal (assuming ortho)
    w,h:xyzMin:xyzMax
    Must be certain to fit in limited space.
    Byte-normalize the data for performance.
    1) Currently hardcode for single slice through
    center plane.  Display as truncated semi
    transparent surface with texturmap of
    values (single polygon).  Use mpigatherv
    to collect the slice.
    2) Send slice data with command
    "s:<varname>[<instance>]=<coords>  Range=<min>:<max>"
    Bcast entry of length 1 if done
    */

  /* Here it just needs to read from the control socket
     and then change the isosurface appropriately */
#ifdef CCTK_MPI
  /* now we need to bcast this value to all procs */
  {
    char stringval[200];
    CCTK_REAL tmpval;
    pGH     *pughGH = PUGH_pGH (GH);
    if(pughGH->myproc==0 && Iso_PollCommand(GH,&command)){
      if (CCTK_Equals (verbose, "full"))
      {
        printf("+++++++++Process Command [%s] [%s] [%s]\n",
               command.cmd.object,command.cmd.target,command.cmd.value);
      }
      new_isovalue=atof(command.cmd.value); /* steer it. */
    }
    else
    {
      new_isovalue = isovalue;
    }

    tmpval=new_isovalue;
    CACTUS_MPI_ERROR(MPI_Bcast(&tmpval,1,
                               PUGH_MPI_REAL,0, /* ugh. nor REAL8 */
                               pughGH->PUGH_COMM_WORLD));
    new_isovalue=tmpval; /* copyback */

    sprintf(stringval,"%f", tmpval);

    /* Steer the parameter */
    CCTK_ParameterSet("isovalue","isosurfacer",stringval);
  }
#else
  if(Iso_PollCommand(GH,&command)){
    if (CCTK_Equals (verbose, "full"))
    {
      printf("+++++++++Process Command [%s] [%s] [%s]\n",
           command.cmd.object,command.cmd.target,command.cmd.value);
    }

    /* Steer the parameter */
    CCTK_ParameterSet("isovalue","isosurfacer",command.cmd.value);
  }
#endif
  return 0;
}

static int doIso(int vindex, const cGH *GH, isosurfacerGH *myGH)
{
  char *fullname;

  if(!myGH->RunIsoSurfacer) return 0;

    fullname = CCTK_FullName (vindex);
  /* printf("Check doIso: fullname[%s]:[%s]",fullname,myGH->funcName);*/
  if(CCTK_Equals(fullname,myGH->funcName)){
    if(myGH->firstIteration<=GH->cctk_iteration &&
       !((GH->cctk_iteration-myGH->firstIteration) % myGH->outfreq)){
      free(fullname);
      return 1;
    }
  }
  free(fullname);
  /* puts("\tfailed"); */
  return 0;
}


static void computeIso(int vindex, const cGH *GH, isosurfacerGH *myGH)
{
  DECLARE_CCTK_PARAMETERS
  char *fullname, *groupname;
  int i, coord_index, coord_system_handle;
  int nx,ny,nz;
  CCTK_REAL *coords[3],*data;
  CCTK_INT coord_handles[3];


  if(!myGH->RunIsoSurfacer) return; /* not running */

  fullname = CCTK_FullName (vindex);
  data = GH->data [vindex][0];
  nx=GH->cctk_lsh[0]; ny=GH->cctk_lsh[1]; nz=GH->cctk_lsh[2];

  /* get the data pointer to the current timelevel of GF X */
  groupname = CCTK_GroupNameFromVarI (vindex);
  coord_system_handle = Coord_GroupSystem (GH, groupname);
  free (groupname);

  Util_TableGetIntArray (coord_system_handle, 3, coord_handles, "COORDINATES");
  for (i = 0; i < 3; i++)
  {
    Util_TableGetInt (coord_handles[i], &coord_index, "GAINDEX");
    coords[i] = CCTK_VarDataPtrI (GH, 0, coord_index);
  }

  /* Actually perform the Isosurfacing Operation */
  NuFindSurface(data,nx,ny,nz,coords[0],coords[1],coords[2],myGH->isovalue,myGH->ComputeNormals,&(myGH->perprocessor));
  /* And collect the geometry to node 0 */
  CollectData(GH, &(myGH->perprocessor), &(myGH->totals));
  /* and for the writers, collect min,max to node 0 */
  if(myGH->formats & (SOCK|ISOHDF5|BIN)){
    int handle;
    handle = CCTK_ReductionHandle ("minimum");
    CCTK_Reduce (GH, 0,handle,1,CCTK_VARIABLE_REAL, &myGH->minval,1, vindex);
    handle = CCTK_ReductionHandle ("maximum");
    CCTK_Reduce (GH, 0, handle, 1, CCTK_VARIABLE_REAL, &myGH->maxval, 1, vindex);
  }

  if (CCTK_MyProc (GH) == 0){
    CCTK_INT4 tmppolys[3] = {0,0,0};
    CCTK_REAL4 tmpverts[3] = {0.0,0.0,0.0};
    CCTK_INT4 *polybackup=0;
    CCTK_REAL4 *vertbackup=0;
    if(allow_empty_sends && myGH->totals.nverts<=0){ /* lets kludge it! YEAH! */
      myGH->totals.nverts=1; /* one vertex */
      myGH->totals.npolys=1; /* one polygon which refers to the same vertex 3 times */
      polybackup=myGH->totals.polys; myGH->totals.polys = tmppolys;
      vertbackup=myGH->totals.verts; myGH->totals.verts = tmpverts;
    }
    if (CCTK_Equals (verbose, "full"))
      printf("       | IsoSurfacer: GF=%s, value %f,",
             fullname, myGH->isovalue);

    if(myGH->totals.nverts > 0) {

      if (CCTK_Equals (verbose, "full"))
        printf("%d vertices, %d triangles\n", myGH->totals.nverts, myGH->totals.npolys);

      if(myGH->formats & BIN)
        WriteBin(GH, &myGH->totals, myGH, fullname, myGH->isovalue);

      if(myGH->formats & ASCII)
        WriteASCII(GH, &myGH->totals, fullname, myGH->isovalue);

      if(myGH->formats & UCD)
        WriteUCD(GH, &myGH->totals,fullname, myGH->isovalue);

      if(myGH->formats & VRML)
        WriteVRML(GH, &myGH->totals, fullname,myGH->isovalue);

      /* !!!!!!!!!!!!!!!!!! what is J representing???? */
      if(myGH->formats & SOCK)
        WriteSock(GH, &myGH->totals,myGH,fullname,0, myGH->isovalue);

      if(myGH->formats & ISOHDF5)
        WriteHDF5(GH, &myGH->totals,myGH,fullname,0, myGH->isovalue);

    }
    else
    {
      CCTK_VWarn (6, __LINE__, __FILE__, CCTK_THORNSTRING,
                  "No isosurface for '%s' isolevel %f",
                  fullname, myGH->isovalue);
    }

    /* !!!!!!!!!!!!!!!! Why the hell are we doing this? !!!!!!!!!!!! */
    if(polybackup || vertbackup){ /* copy back datastructures */
      myGH->totals.polys=polybackup;
      myGH->totals.verts=vertbackup;
    }
  }
  free (fullname);
}

int IsoSurfacer (const cGH *GH)
{
  int i, n, retval;
  isosurfacerGH *myGH;
  DECLARE_CCTK_PARAMETERS


  myGH = (isosurfacerGH *) CCTK_GHExtension (GH, "IsoSurfacer");

  if (! myGH->RunIsoSurfacer)
  {
    return (0);  /* not running */
  }

  IsoSurfacerHandleCommands (GH);
  myGH->isovalue=isovalue; /* take the contents of the "steered" isosurface value and put it here */
  /* do a check for new isosurfaces */
  /* Perhaps do a bcast for "changed" flags.
     which are embedded in each iso. */

  /* for each Grid  */
  for (i = retval = 0, n = CCTK_NumVars (); i < n; i++)
  {
    if (! doIso (i, GH, myGH))
    {
      continue;
    }
    if (CCTK_QueryGroupStorageI(GH,CCTK_GroupIndexFromVarI(i)))
    {
      computeIso(i, GH, myGH);
      retval++;
    }
    else
    {
      CCTK_VWarn (9, __LINE__, __FILE__, CCTK_THORNSTRING,
                  "No storage assigned for '%s'", CCTK_VarName (i));
    }
  }

  return (retval);
}

/***************************************************************************/

void CollectData(const cGH *GH, polypatch *perprocessor, polypatch *totals) {
  DECLARE_CCTK_PARAMETERS
#ifdef CCTK_MPI

    /* Collect the isosurface data onto processor 0 */
    /* First collect the numbers of vertices (MPI_Gather)*/
    /* Then the vertices themselves (MPI_Gatherv)*/
    /* Then the number of polygons (MPI_Gather)*/
    /* Then the polygon list. This needs to be offset by the number of
       vertices ahead of me, so do that after collection. */

    static  int   a, b;
  static  int  *vcount = NULL;
  static  int  *pcount = NULL;
  static  int  *vdispl = NULL;
  static  int  *pdispl = NULL;
  static  int  lastNverts = -1;
  static  int  lastNpolys = -1;
  static  CCTK_INT4  my_vpcount [2];
  static  CCTK_INT4 *vpcount = NULL;
  pGH     *pughGH;

  pughGH = PUGH_pGH (GH);
  /* Allocate temporary arrays for the MPI_Gatherv() operation */
  if(pughGH->myproc == 0) {
    if(vpcount == NULL) {
      vpcount = NEW (2 * pughGH->nprocs, CCTK_INT4);
      vcount = NEW(4*pughGH->nprocs, int);
      pcount = &vcount[pughGH->nprocs];
      vdispl = &vcount[2*pughGH->nprocs];
      pdispl = &vcount[3*pughGH->nprocs];
    }
  }

  /* **** Gather counts of vertex and polygon lists in one wash */
  my_vpcount [0] = 3*perprocessor->nverts;
  my_vpcount [1] = 3*perprocessor->npolys;
  CACTUS_MPI_ERROR (MPI_Gather (my_vpcount, 2, PUGH_MPI_INT4, vpcount, 2,
                                PUGH_MPI_INT4, 0, pughGH->PUGH_COMM_WORLD));

  /* Allocate for the vertices */
  if(pughGH->myproc == 0){
    totals->nverts = 0;
    totals->npolys = 0;

    for (a = 0; a < pughGH->nprocs; a++) {
      /* now sort out the vcounts and pcounts into the int-arrays
         used in MPI_Gatherv() */
      vcount [a] = vpcount [2*a + 0];
      pcount [a] = vpcount [2*a + 1];

      /* compute the displacements and total number of elements */
      vdispl[a] = totals->nverts;
      pdispl[a] = totals->npolys;
      totals->nverts += vcount[a];
      totals->npolys += pcount[a];
    }

    totals->nverts /= 3;
    totals->npolys /= 3;
    if(compute_normals)
      totals->nnorms=totals->nverts;
    else
      totals->nnorms=0;

    /*
      Kludge:
      Allocate 3 more than necessary so as to divert
      the output of processors
      with nverts=0 to a dummy area in the upper part of totals->verts.
      Otherwise the MPI_Gatherv routine gives lots of problems.
      This is problem which is particular to the T3E native
      implementation of MPI.
    */
    if(lastNverts < totals->nverts){
      REALLOC(totals->verts, 3+3*totals->nverts, CCTK_REAL4);
      if(compute_normals){
        REALLOC(totals->norms, 3+3*totals->nverts, CCTK_REAL4);
      }
      lastNverts = totals->nverts;
    }
    if(lastNpolys < totals->npolys){
      REALLOC(totals->polys, 3+3*totals->npolys, CCTK_INT4);
      lastNpolys = totals->npolys;
    }
  } /* end processor 0 setup */

  /* Gather the vertex lists from all processors */
  CACTUS_MPI_ERROR (MPI_Gatherv (perprocessor->verts, perprocessor->nverts*3,
                                 PUGH_MPI_REAL4, totals->verts, vcount, vdispl, PUGH_MPI_REAL4,
                                 0, pughGH->PUGH_COMM_WORLD));

  /* Gather the polygon lists from all processors */
  CACTUS_MPI_ERROR (MPI_Gatherv (perprocessor->polys, perprocessor->npolys*3,
                                 PUGH_MPI_INT4, totals->polys, pcount, pdispl, PUGH_MPI_INT4,
                                 0, pughGH->PUGH_COMM_WORLD));
  if(compute_normals){
    CACTUS_MPI_ERROR (MPI_Gatherv (perprocessor->norms, perprocessor->nnorms*3,
                                   PUGH_MPI_REAL4, totals->norms, vcount, vdispl, PUGH_MPI_REAL4,
                                   0, pughGH->PUGH_COMM_WORLD));
  }
  /* JMS Comment:
     Now we need to re-number the connectivity list so that
     they can be combined in the master list (remember, the
     connectivity numbering right now is processor local...
     we need to combine this connectivity info into a single list */
  if(pughGH->myproc == 0){ /* If I'm the master processor */
    for(a = 1; a<pughGH->nprocs; a++) { /* for segments gathered from each processor */
      for(b = 0; b<pcount[a]; b++){ /* for all polys in the segment */
        /* Add displacement to each connectivity integer */
        totals->polys[pdispl[a]+b] += vdispl[a]/3;
      }
    }
  }

#else  /* !MPI */
  GH = GH;
  *totals = *perprocessor;
#endif /* MPI */
}

/**************************************************************/

int IsoWriteDataToClients(char *metadata,
                          CCTK_INT8 size,
                          IsoType type,
                          void *data);

void WriteSock(const cGH *GH, polypatch *totals, isosurfacerGH *myGH,
               const char *fullname, int isoindex,
               CCTK_REAL4 IsoValue)
{
  DECLARE_CCTK_PARAMETERS /* Gives us access to compute_normals parameter) */
  /* Was: parms->timestep, which was callnumber from above. */
  char tmpstring[128];
  CCTK_INT4   *polys;
  CCTK_REAL4  *verts;
  CCTK_REAL4  *norms;
  CCTK_INT4 tmppolys[3] = {0,0,0};
  CCTK_REAL4 tmpverts[3] = {0.0,0.0,0.0};
  CCTK_REAL4 tmpnorms[3] = {0.0,0.0,0.0};

  int x=0;

  isoindex = isoindex;
  IsoValue = IsoValue;

  /* Needs to collect min/max here */
  sprintf(tmpstring," :%s[0]=%f,%u range=%f:%f",
          fullname,myGH->isovalue,
          GH->cctk_iteration,
          myGH->minval,myGH->maxval);
  /********Now write vertices**********/
  *tmpstring='v';
  verts = totals->nverts > 0 ? totals->verts : tmpverts;
  IsoWriteDataToClients(tmpstring,
                        3*totals->nverts,
                        Int32,
                        (CCTK_INT4 *)verts);
  /********Now write polygons**********/
  *tmpstring='c';
  polys = totals->npolys > 0 ? totals->polys : tmppolys;
  IsoWriteDataToClients(tmpstring,
                        3*totals->npolys,
                        Float32,
                        (CCTK_INT4 *)polys);
  /********Now write normals**********/
  if (compute_normals)
  {
    *tmpstring='n';
    norms = totals->nnorms > 0 ? totals->norms : tmpnorms;
    IsoWriteDataToClients(tmpstring,
                          3*totals->nnorms,
                          Int32,
                          (CCTK_INT4 *)norms);
  }
}

/***************************************************************************/

static void WriteHDF5(const cGH *GH, polypatch *totals, isosurfacerGH *myGH,
                      const char *fullname, int isoindex, CCTK_REAL4 IsoValue)
{
  DECLARE_CCTK_PARAMETERS
#ifdef CACTUSPUGHIO_IOHDF5
  char *filename;

  filename = malloc (strlen (out_dir) + strlen (fullname) +
                     strlen (PUGH_pGH (GH)->identity_string) + 20);
  sprintf (filename, "%s/%s%s.iso.h5", out_dir, fullname,
           PUGH_pGH (GH)->identity_string);
  /* needs to extract min/max value for GF with CCTK_Reduction op*/
#if 0 /* disabled for now */
  IOHDF5_WriteIsosurface (GH, filename, fullname,
                          (CCTK_INT) GH->cctk_iteration,
                          (CCTK_INT) GridAll.timelevel,
                          (CCTK_REAL) myGH->isovalue,
                          (CCTK_REAL) myGH->minval, (CCTK_REAL) myGH->maxval,
                          (int) totals->npolys, totals->polys,
                          (int) totals->nverts, totals->verts);
#endif
  free (filename);
#else

  CCTK_WARN (1, "No HDF5 isosurface output because CactusPUGHIO/IOHDF5 was not compiled in !");

#endif
  GH = GH;
  totals = totals;
  myGH = myGH;
  fullname = fullname;
  isoindex = isoindex;
  IsoValue = IsoValue;
}

/***************************************************************************/

void
WriteBin(const cGH *GH, polypatch *totals, isosurfacerGH *myGH, const char *fullname,
         CCTK_REAL4 isolevel)
{
  /* Write Isosurfaces in Manuel's own format which can
     then be read by 'isoshow' and 'isoserver' */

  DECLARE_CCTK_PARAMETERS
  static CCTK_INT4 step=0;
  static FILE  *bf;
  static char   fname[256];
  static char   tmpstring[100];
  CCTK_INT4   tmp;
  CCTK_REAL4 ftmp;
  char formatstring[256];

/* Debug printing stuff ---------------------
  sprintf(fname," :%s[%u]=%f,%u range=%f:%f",
           fullname,j,myGH->isovalue,myGH->timestep,
           myGH->minval,myGH->maxval);
  printf("SockString = [%s]\n",fname);
--------------------------------------------*/
  if(*format_str=='%')
    sprintf (formatstring, "%s/%%s%%s_%s_%%d.iso.bin", out_dir, format_str);
  else
    sprintf (formatstring, "%s/%%s%%s_%%3.3f_%%d.iso.bin", out_dir);
  sprintf (fname, formatstring, fullname, PUGH_pGH (GH)->identity_string,
           isolevel, GH->cctk_iteration);

  if(!(bf =fopen(fname,"w")))
    {
      printf("Attempt to open filename [%s] failed\n",fname);
      perror("Could not create isosurface bin output file");
      return;
    }
  strcpy(tmpstring, "ISOSURFACE");

  fwrite(tmpstring, 1, strlen(tmpstring)+1, bf);
  fwrite(fullname, 1, strlen(fullname)+1, bf);

  tmp = (CCTK_INT4)GH->cctk_iteration;
  fwrite(&tmp, sizeof(CCTK_INT4), 1, bf);

  ftmp=myGH->isovalue;
  fwrite(&ftmp, sizeof(CCTK_REAL4), 1, bf);

  fwrite(&step, sizeof(CCTK_INT4), 1, bf);
  tmp=1;
  fwrite(&tmp, sizeof(CCTK_INT4), 1, bf);

  fwrite(&totals->nverts, sizeof(CCTK_INT4), 1, bf);
  fwrite(&totals->npolys, sizeof(CCTK_INT4), 1, bf);
  fwrite(totals->verts, sizeof(CCTK_REAL4), 3*totals->nverts, bf);
  if(totals->npolys > 0)
    fwrite(totals->polys, sizeof(CCTK_INT4), 3*totals->npolys, bf);

  fclose(bf);
}

/***************************************************************************/

void
WriteVRML(const cGH *GH, polypatch *totals, const char *fullname,
          CCTK_REAL4 isolevel)
{
  /* Write isosurfaces in VRML 1.0 ASCII format
     (can be read by ivview) */

  DECLARE_CCTK_PARAMETERS
  static int   a, p, q;
  static FILE *pd;
  static char  fname[256];
  static char *outs = NULL;
  static char  tmps[256];
  static CCTK_INT4  efs = 0, lfs = 0;

  sprintf(fname, "%s/%s%s_%3.3f_%d.iso.wrl",
          out_dir, fullname, PUGH_pGH (GH)->identity_string, isolevel,
          GH->cctk_iteration);
  if (!(pd = fopen(fname, "w"))) {
      perror("Could not create isosurface vrml output file");
      return;
  }

  /* In order to speed up the writing, we put everything in a big string
   * and write the whole string out in one go.
   */
  efs = 30*totals->nverts + 30*totals->npolys; /* Estimated string size */
  p = 0;
  if(lfs < efs)
    {
      outs = realloc((void *)outs, efs * sizeof(char));
      lfs = efs;
    }
  outs[0] = '\0';

  sprintf (tmps, "#VRML V1.0 ascii\nSeparator {\n\tPointLight { location 1 1 1 }\n\t  Coordinate3 {\n\t\tpoint [ ");
  Append_Or_EnlargeAndAppend(outs, tmps);

  sprintf (tmps, "%f %f %f",
            totals->verts[0], totals->verts[1], totals->verts[2]);
  Append_Or_EnlargeAndAppend(outs, tmps);
  for (a = 3; a<3*totals->nverts; a+= 3)
    {
      sprintf (tmps, ", \n\t\t%f %f %f",
                totals->verts[a+0], totals->verts[a+1], totals->verts[a+2]);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }
  sprintf(tmps, "]\n\t}\n\tIndexedFaceSet {\n\t\tcoordIndex [ ");
  Append_Or_EnlargeAndAppend(outs, tmps);

  sprintf (tmps, "%d, %d, %d, -1",
            totals->polys[0], totals->polys[1], totals->polys[2]);
  Append_Or_EnlargeAndAppend(outs, tmps);
  for (a = 3; a<3*totals->npolys; a += 3)
    {
      sprintf (tmps, ", \n\t\t%d, %d, %d, -1",
                totals->polys[a], totals->polys[a+1], totals->polys[a+2]);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }
  sprintf(tmps, "\t\t]\n\t}\n}");
  Append_Or_EnlargeAndAppend(outs, tmps);

  fwrite(outs, 1, strlen(outs), pd);
  fclose(pd);
}

/***************************************************************************/

void
WriteASCII(const cGH *GH, polypatch *totals, const char *fullname,
           CCTK_REAL4 isolevel)
{
  /* Write Iso's in Paul's ASCII format */

  DECLARE_CCTK_PARAMETERS
  static int   a, p, q;
  static FILE *pd;
  static char  fname[256];
  static char *outs = NULL;
  static char  tmps[256];
  static CCTK_INT4  efs = 0, lfs = 0;

  sprintf(fname, "%s/%s%s_%3.3f_%d.iso.ascii",
          out_dir, fullname, PUGH_pGH (GH)->identity_string, isolevel,
          GH->cctk_iteration);

  if (!(pd = fopen(fname, "w"))){
      perror("Could not create isosurface ascii output file");
      return;
    }

  /* In order to speed up the writing, we put everything in a big string
   * and write the whole string out in one go.
   */
  efs = 30*totals->nverts + 20*totals->npolys; /* Estimated string size */
  p = 0;
  if(lfs < efs)
    {
      outs = realloc((void *)outs, efs * sizeof(char));
      lfs = efs;
    }
  outs[0] = '\0';

  sprintf (tmps, "%d %d\n", totals->nverts, totals->npolys);
  Append_Or_EnlargeAndAppend(outs, tmps);

  for (a = 0; a<3*totals->nverts; a += 3)
    {
      sprintf (tmps, "%f %f %f\n",
                totals->verts[a+0], totals->verts[a+1], totals->verts[a+2]);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }

  for (a = 0; a<3*totals->npolys; a += 3)
    {
      sprintf (tmps, "%d %d %d\n",
                totals->polys[a], totals->polys[a+1], totals->polys[a+2]);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }

  fwrite(outs, 1, strlen(outs), pd);
  fclose(pd);
}

/***************************************************************************/

void
WriteUCD(const cGH *GH, polypatch *totals, const char *fullname,
         CCTK_REAL4 isolevel)
{
  /* Write Iso's in AVS ascii UCD format */

  DECLARE_CCTK_PARAMETERS
  static int   a, p, q;
  static FILE *uf;
  static char  fname[256];
  static char *outs = NULL;
  static char  tmps[256];
  static CCTK_INT4  efs = 0, lfs = 0;

  sprintf(fname, "%s/%s%s_%3.3f_%d.iso.inp",
           out_dir, fullname, PUGH_pGH (GH)->identity_string, isolevel,
           GH->cctk_iteration);

  if (!(uf = fopen(fname, "w"))) {
      perror("Could not create isosurface ucd output file");
      return;
  }

  /* In order to speed up the writing, we put everything in a big string
   * and write the whole string out in one go.
   */
  efs = 60*totals->nverts + 40*totals->npolys; /* Estimated string size */
  p = 0;
  if(lfs < efs)
    {
      outs = realloc((void *)outs, efs * sizeof(char));
      lfs = efs;
    }
  outs[0] = '\0';

  sprintf(tmps, "%d %d 1 0 0\n", totals->nverts, totals->npolys);
  Append_Or_EnlargeAndAppend(outs, tmps);


  for (a = 0; a<3*totals->nverts; a += 3)
    {
      sprintf (tmps, "%d %f %f %f\n", a/3+1,
                        totals->verts[a+0], totals->verts[a+1], totals->verts[a+2]);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }

  for (a = 0; a<3*totals->npolys; a += 3)
    {
      sprintf (tmps, "%d %d tri %d %d %d\n", a/3+1, a/3+1,
                totals->polys[a]+1, totals->polys[a+1]+1, totals->polys[a+2]+1);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }

  sprintf(tmps, "1 1\nisosurface,in\n1 1.20000\n");
  Append_Or_EnlargeAndAppend(outs, tmps);

  for(a=1; a<totals->nverts; a++)
    {
      sprintf(tmps, "%d 1.00000\n", a+1);
      Append_Or_EnlargeAndAppend(outs, tmps);
    }

  fwrite(outs, 1, strlen(outs), uf);
  fclose(uf);
}

/***************************************************************************/

/* this is pretty redundant.  Should be removed and just use doIso() */
int IsoSurfacer_TimeForOutput(const cGH *GH, int i){
  /* Get the GH extensions for IOUtil and IOASCII */
  isosurfacerGH *myGH = (isosurfacerGH *)GH->extensions[CCTK_GHExtensionHandle("IsoSurfacer")];
  if (!myGH ||!myGH->RunIsoSurfacer)
    return 0;
  /* do a check for new isosurfaces */
  /* Perhaps do a bcast for "changed" flags.
     which are embedded in each iso. */
  return doIso(i, GH, myGH);
}

int IsoSurfacer_TriggerOutput(const cGH *GH,int variable){
  isosurfacerGH *myGH;
  myGH = (isosurfacerGH *) GH->extensions [CCTK_GHExtensionHandle ("IsoSurfacer")];
  if(!myGH || !myGH->RunIsoSurfacer) return 0;
  computeIso(variable,GH,myGH);
  /* FIXME MAYBE
  myGH->out1D_last[variable] = GH->cctk_iteration;
  */
  return 0;
}
