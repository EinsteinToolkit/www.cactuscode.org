<?php $title='Release Notes for Beta 16';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>Release Notices for Cactus 4.0 beta 16<br />
  ======================================<br />
  Date: 2 February 2009</p>
<p>Released modules:<br />
  ================</p>
<p>Cactus<br />
  CactusBase<br />
  CactusBench<br />
  CactusConnect<br />
  CactusEinstein<br />
  CactusElliptic<br />
  CactusExamples<br />
  CactusExternal<br />
  CactusIO<br />
  CactusPUGH<br />
  CactusPUGHIO<br />
  CactusTest<br />
  CactusUtils<br />
  CactusWave<br />
</p>
<p>New thorns:<br />
  ==========</p>
<p>CactusBase/InitBase<br />
  CactusExternal/BLAS<br />
  CactusExternal/FFTWlib<br />
  CactusExternal/GSL<br />
  CactusExternal/HDF5<br />
  CactusExternal/LAPACK<br />
  CactusExternal/LORENE<br />
  CactusExternal/PETSc<br />
  CactusExternal/SDF<br />
  CactusTest/TestAllTypes<br />
  CactusTest/TestFortranDependencies1<br />
  CactusTest/TestFortranDependencies2<br />
  CactusTest/TestGlobalReduce<br />
  CactusTest/TestLocalReduce<br />
  CactusTest/TestSchedule<br />
  CactusTest/TestTable<br />
  CactusTest/TestTypes<br />
</p>
<p>New supported architectures:<br />
  ============================</p>
<p>Blue Gene/P<br />
  Cray XT-4<br />
  Loongson 2F<br />
  SiCortex<br />
</p>
<p>CVS Tag:<br />
  ========</p>
<p>Cactus_4_0_Beta_16<br />
</p>
<p>==============================================================================</p>
<p>CHANGES FOR BETA 16<br />
  ===================</p>
<p>Flesh<br />
  =====</p>
<p>New Reduction Interface:<br />
  There is a new reduction interface which has been brought into line<br />
  with the interpolation interface. The old reduction interface will<br />
  remain available.</p>
<p>New mechanism for configuring external libraries:<br />
  External libraries, such as e.g. HDF5 or LAPACK, can now be<br />
  configured via configuration scripts within thorns, instead of<br />
  relying on the central Cactus configuration mechanism. This<br />
  simplifies interfacing to non-Cactus libraries. A set of new thorns<br />
  in the CactusExternal arrangement use this mechanism. The old<br />
  configuration mechanism is still available.</p>
<p>Cactus documentation format changed to PDF:<br />
  Documentation is now produced as pdf files (instead of postscript).<br />
  Figures in thorn documentation directories need to be updated from<br />
  eps to pdf as well.</p>
<p>Core Thorns<br />
  ===========</p>
<p>CactusBase/InitBase:<br />
  A new thorn CactusBase/InitBase helps ensure that initial data are<br />
  set up correctly on all time levels. It does not set up any initial<br />
  data by itself; it merely remembers how initial data are to be set<br />
  up, so that other thorns can check their actions against this thorn.<br />
</p>
<p>==============================================================================<br />
</p>
<p>KNOWN BUGS IN BETA 16<br />
  =====================<br />
  (See Cactus bug tracking system for a complete list)</p>
<p>==============================================================================<br />
</p>
<p>TEST MACHINES NOTES<br />
  ===================</p>
<p>(Alphabetical by architecture.)</p>
<p>* Cray XT-4</p>
<p>o kraken.nics.tennessee.edu with MPI (MPI: Native)<br />
  (PGI 7.2.5)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (missing certain PETSc libraries)<br />
  CactusExternal/PETSc (missing certain PETSc libraries)<br />
  CactusConnect/HTTPD (no SSL installed)<br />
  CactusConnect/HTTPDExtra (no SSL installed)<br />
  CactusConnect/Socket (no SSL installed)<br />
  CactusExternal/SDF (no SDF installed)<br />
  CactusExternal/LORENE (no LORENE installed)<br />
  CactusEinstein/AHFinder (compiler issues)<br />
  CactusTest/TestAllTypes (compiler issues)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>* IBM p5</p>
<p>o pelican.hpc.lsu.edu with MPI (MPI: Native)<br />
  (xlc-7.0 / xlf-9.1)<br />
  Other LONI/LSU p5 systems are similar, i.e.,<br />
  bluedawg.loni.org, ducky.loni.org, lacumba.loni.org,<br />
  neptune.loni.org, zeke.loni.org</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (no PETSc installed)<br />
  CactusExternal/PETSc (no PETSc installed)<br />
  CactusExternal/SDF (no SDF installed)<br />
  CactusExternal/FFTWlib (no FFTW installed)<br />
  CactusTest/TestAllTypes (not all types available)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)</p>
<p>* Intel IA32 (Linux 2.6.9-55.0.9.EL_lustre.1.6.4custom)</p>
<p>o abe.ncsa.uiuc.edu with MPI<br />
  (MPI: mvapich2-0.9.8p2patched, compiled with Intel, and with ofed-1.2)<br />
  (Intel icc/icpc 10.1.008 / ifort 10.1.008)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (PETSc not installed)<br />
  CactusExternal/FFTWlib (FFTW not installed)<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/PETSc (PETSc not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>o eric.loni.org with MPI (mvapich2-1.02 compiled with Intel C++ 10.1)<br />
  (Intel icc/icpc v10.1.008 / ifort v10.1.008)<br />
  All other LONI and LSU Linux clusters are similar, i.e.,<br />
  louie.loni.org, oliver.loni.org, poseidon.loni.org,<br />
  queenbee.loni.org, tezpur.hpc.lsu.edu</p>
<p>- not compiling:<br />
  CactusExternal/SDF (no SDF installed)<br />
  TAT/TATPETSc (not compatible with PETSc installed)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)<br />
  test_waveell (from IDScalarWaveElliptic)</p>
<p>o lonestar.tacc.utexas.edu with MPI (MPI: MVAPICH/1.0.1)<br />
  (Intel icc/icpc 10.1 / ifort 10.1)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (PETSc not installed)<br />
  CactusExternal/FFTWlib (FFTW not installed)<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/PETSc (PETSc not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)<br />
  test_waveell (from IDScalarWaveElliptic)</p>
<p>o numrel02.cct.lsu.edu with MPI (MPI: MPICH/1.2.7p1)<br />
  (GCC 4.3.0 20080109 (experimental))<br />
  Linux workstation</p>
<p>- not compiling:<br />
  CactusExternal/FFTWlib (FFTW not installed)<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>o numrel02.cct.lsu.edu with MPI (MPI: MPICH/1.2.7p1)<br />
  (Intel icc/icpc v10.1.013 / ifort v10.1.013)<br />
  Linux workstation</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (PETSc not installed)<br />
  CactusExternal/FFTWlib (FFTW not installed)<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/PETSc (PETSc not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)<br />
  test_waveell (from IDScalarWaveElliptic)</p>
<p>o numrel02.cct.lsu.edu without MPI<br />
  (Intel icc/icpc v10.1.013 / ifort v10.1.013)<br />
  Linux workstation</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (PETSc not installed)<br />
  CactusExternal/FFTWlib (FFTW not installed)<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/PETSc (PETSc not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOPanda (configured without MPI)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>o ranger.tacc.utexas.edu with MPI (MPI: MVAPICH/0.9.9)<br />
  (Intel icc/icpc v10.1 / ifort v10.1)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (PETSc requires MVAPICH2)<br />
  CactusExternal/PETSc (PETSc requires MVAPICH2)<br />
  CactusExternal/SDF (no SDF installed)<br />
  CactusExternal/LORENE (no LORENE installed)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)<br />
  test_waveell (from IDScalarWaveElliptic)</p>
<p>o redshift with MPI (MPI: MPICH/1.2.7)<br />
  (GCC 4.3.2)<br />
  Mac OS X laptop</p>
<p>- not compiling:<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)<br />
  CactusTest/TestAllTypes (CCTK_REAL16 not supported)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>o redshift without MPI<br />
  (GCC 4.3.2)<br />
  Mac OS X laptop</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (PETSc not installed)<br />
  CactusExternal/LORENE (LORENE not installed)<br />
  CactusExternal/PETSc (PETSc not installed)<br />
  CactusExternal/SDF (SDF not installed)<br />
  CactusPUGHIO/IOPanda (configured without MPI)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)<br />
  CactusTest/TestAllTypes (CCTK_REAL16 not supported)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>* Intel IA64 (Scientific Linux 5.0, 2.6.18-SMP)</p>
<p>o damiana.aei.mpg.de with MPI (MPI: Scali MPI 5.6.3)<br />
  (Intel icc/icpc v10.1.008 / ifort v10.1.008)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (no PETSc installed)<br />
  CactusExternal/PETSc (no PETSc installed)<br />
  TAT/TATPETSc (no PETSc installed)<br />
  CactusExternal/SDF (no SDF installed)<br />
  CactusExternal/FFTWlib (no FFTW installed)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>* SGI Altix 4700</p>
<p>o hlrb2.lrz-muenchen.de with MPI (MPI: Native)<br />
  (Intel icc/icpc v10.1.018 / ifort v10.1.018)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (incompatible PETSc installation)<br />
  CactusExternal/PETSc (incompatible PETSc installation)<br />
  CactusExternal/SDF (no SDF installed)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>* SGI Altix Prism</p>
<p>o santaka.cct.lsu.edu with MPI (MPI: Native)<br />
  (Intel icc v10.1.015 / ifort v10.1.015)</p>
<p>- not compiling:<br />
  CactusElliptic/EllPETSc (no PETSc installed)<br />
  CactusExternal/PETSc (no PETSc installed)<br />
  CactusExternal/SDF (no SDF installed)<br />
  CactusExternal/FFTWlib (no FFTW installed)</p>
<p>- testsuites failing:<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  teuktest4 (from PsiKadelia)<br />
  arrays (from TestArrays)<br />
  arrays0 (from TestArrays)</p>
<p>* SiCortex</p>
<p>o machine located at SiCortex in Houston with MPI (custom MPI)<br />
  (PathScale 3.2.99r)</p>
<p>- not compiling:<br />
  CactusConnect/HTTPD (no SSL installed)<br />
  CactusConnect/HTTPDExtra (no SSL installed)<br />
  CactusConnect/Socket (no SSL installed)<br />
  CactusEinstein/AHFinder (compiler issues)<br />
  CactusElliptic/EllPETSc (missing certain PETSc libraries)<br />
  CactusExternal/LORENE (no LORENE installed)<br />
  CactusExternal/PETSc (missing certain PETSc libraries)<br />
  CactusExternal/SDF (no SDF installed)<br />
  CactusPUGHIO/IOStreamedHDF5 (installed HDF5 does not suppport streaming)<br />
  CactusTest/TestAllTypes (CCTK_REAL16 not supported)<br />
  CactusTest/TestCoordinates (some types not supported)<br />
  CactusTest/TestAllTypes (compiler issues)</p>
<p>- testsuites failing:<br />
  test_Bench (from BenchADM)<br />
  test_ADM_2 (from ADM)<br />
  test_axibrill_nostagger (from IDAxiBrillBH)<br />
  test_pw_ADM_sl (from IDLinearWaves)<br />
  test_maximal_1 (from Maximal)<br />
  teuktest4 (from PsiKadelia)<br />
</p>
<p>=====================================================================</p>
<p>CONFIGURATION FILES FOR TEST MACHINES<br />
  -------------------------------------</p>
<p>Availabe in CVS at</p>
<p>cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus checkout Utilities/Releases/Beta16</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
