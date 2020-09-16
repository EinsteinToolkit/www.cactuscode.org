---
layout: default
title: Cactus moves from CVS to Subversion
---
In April 2010 several organization changes were made for the
distribution of the Cactus Code. The main changes are:

-   [Changing from GetCactus to GetComponents](#GetComponents)
-   [Move from CVS to Subversion](#svn)
-   [Mail list for commit messages](#commit)
-   [Thorns moving between arrangements](#thorns)

### <span id="GetComponents"></span>GetComponents

Cactus has moved from using GetCactus for checking out Cactus to a new
tool:
[GetComponents](http://cactuscode.org/documentation/GetComponents.php).
The new thorn list language is not very different from the old, but it
now directly contains information about the flesh and can include
non-thorn utilities (e.g. SimFactory).

See the [documentation
page](http://cactuscode.org/documentation/GetComponents.php) for a full
description. Example new format thornlists are provided for the Cactus
Computational Toolkit
([ComputationalToolkit.th](http://www.cactuscode.org/download/thorns/ComputationalToolkit.th))
and the Einstein Toolkit
([einsteintoolkit.th](https://svn.einsteintoolkit.org/manifest/branches/ET_2010_06/einsteintoolkit.th)).

<span id="svn"></span>

### CVS to Subversion

After using CVS for code development and distribution for over a decade,
we have migrated to Subversion to take advantage of more capabilties. As
with CVS, Subversion has the concept of a single, central repository.

The command line tool 'svn' has similar sub-commands to cvs, e.g.
`svn checkout svn diff svn update svn commit`

The server cvs.cactuscode.org will not be used in the future. All
repositories hosted at this server have been migrated to
svn.cactuscode.org. This new server can be accessed using a Subversion
client or viewed using a web client (pointed to
[https://svn.cactuscode.org](https://svn.cactuscode.org/)). Read-only
access to some of the repositories is also available using http.

The Cactus flesh can now be found using the URL
`https://svn.cactuscode.org/flesh/trunk/`

The Cactus arrangements can be found using
`https://svn.cactuscode.org/arrangements/ARRANGEMENT/THORN/trunk` where
ARRANGEMENT/THORN could e.g. be CactusBase/Time.

Projects which are not directly maintained by the Cactus team but are
hosted on the cactuscode server (found under /arrangements in CVS) can
be found at `https://svn.cactuscode.org/projects/`

<span id="commits"></span>

### Commit messages

Commit messages will in the future go to the mailing list
[commits@cactuscode.org](http://cactuscode.org/mailman/listinfo/commits).
Subscribed users to old lists have been copied over to this new list.

<span id="thorns"></span>

### Thorns moving

Some previously external thorns have been included into Cactus, and some
former Cactus thorns (CactusEinstein) have been moved to a separate
project ([EinsteinToolkit](http://www.einsteintoolkit.org)). The
following table summarizes the old and new locations of thorns which
have moved, and includes thorns moving into the Einstein Toolkit. A very
small number thorns changed name, also indicated in this table.

| Old arrangement | Thorn               | New arrangement (New thorn name)        |
|-----------------|---------------------|-----------------------------------------|
| AEIDevelopment  | InterpToArray       | CactusNumerical                         |
| AEIThorns       | AHFinderDirect      | EinsteinAnalysis                        |
| AEIThorns       | CalcK               | EinsteinAnalysis                        |
| AEIThorns       | Constants           | EinsteinBase                            |
| AEIThorns       | Dissipation         | CactusNumerical                         |
| AEIThorns       | EHFinder            | EinsteinAnalysis                        |
| AEIThorns       | Exact               | EinsteinInitialData                     |
| AEIThorns       | Formaline           | CactusUtils                             |
| AEIThorns       | Fortran             | CactusBase                              |
| AEIThorns       | IDConstraintViolate | EinsteinInitialData                     |
| AEIThorns       | IDFileADM           | EinsteinInitialData                     |
| AEIThorns       | Nice                | CactusUtils                             |
| AEIThorns       | NoExcision          | EinsteinInitialData                     |
| AEIThorns       | Noise               | CactusNumerical                         |
| AEIThorns       | Norms               | CactusNumerical                         |
| AEIThorns       | ReflectionSymmetry  | CactusNumerical                         |
| AEIThorns       | RotatingSymmetry180 | CactusNumerical                         |
| AEIThorns       | RotatingSymmetry90  | CactusNumerical                         |
| AEIThorns       | SphericalSurface    | CactusNumerical                         |
| AEIThorns       | TwoPunctures        | EinsteinInitialData                     |
| Excision        | LEGOExcision        | EinsteinEvolve                          |
| PerturbedBH     | DistortedBHIVP      | EinsteinInitialData                     |
| PerturbedBH     | IDAxiOddBrillBH     | EinsteinInitialData                     |
| PerturbedBH     | RotatingDBHIVP      | EinsteinInitialData                     |
| BetaThorns      | Cartoon2D           | CactusNumerical                         |
| CactusBase      | MoL                 | CactusNumerical                         |
| CactusEinstein  | ADMAnalysis         | EinsteinAnalysis                        |
| CactusEinstein  | ADMBase             | EinsteinBase                            |
| CactusEinstein  | ADMConstraints      | EinsteinAnalysis                        |
| CactusEinstein  | ADMCoupling         | EinsteinBase                            |
| CactusEinstein  | ADMMacros           | EinsteinBase                            |
| CactusEinstein  | AHFinder            | EinsteinAnalysis                        |
| CactusEinstein  | CoordGauge          | EinsteinBase                            |
| CactusEinstein  | Extract             | EinsteinAnalysis                        |
| CactusEinstein  | HydroBase           | EinsteinBase                            |
| CactusEinstein  | IDAnalyticBH        | EinsteinInitialData                     |
| CactusEinstein  | IDAxiBrillBH        | EinsteinInitialData                     |
| CactusEinstein  | IDBrillData         | EinsteinInitialData                     |
| CactusEinstein  | IDLinearWaves       | EinsteinInitialData                     |
| CactusEinstein  | SpaceMask           | CactusNumerical                         |
| CactusEinstein  | StaticConformal     | EinsteinBase                            |
| CactusEinstein  | TmunuBase           | EinsteinBase                            |
| CactusEOS       | EOS\_Base           | EinsteinBase                            |
| CactusEOS       | EOSG\_Base          | EinsteinBase                            |
| CactusEOS       | EOSG\_Hybrid        | EinsteinEOS                             |
| CactusEOS       | EOSG\_IdealFluid    | EinsteinEOS                             |
| CactusEOS       | EOSG\_Polytrope     | EinsteinEOS                             |
| CactusEOS       | EOS\_Hybrid         | EinsteinEOS                             |
| CactusEOS       | EOS\_Ideal\_Fluid   | EinsteinEOS (EOS\_IdealFluid)           |
| CactusEOS       | EOS\_Polytrope      | EinsteinEOS                             |
| CIGR            | Hydro\_Analysis     | EinsteinAnalysis                        |
| CIGR            | Whisky              | EinsteinEvolve (GRHydro)                |
| CIGR            | Whisky\_Init\_Data  | EinsteinInitialData (GRHydro\_InitData) |
| CIGR            | Whisky\_TOVSolverC  | EinsteinInitialData (TOVSolver)         |
| LSUThorns       | ID\_Bin\_BH         | EinsteinInitialData (Meudon\_Bin\_BH)   |
| LSUThorns       | ID\_Bin\_NS         | EinsteinInitialData (Meudon\_Bin\_NS)   |
| LSUThorns       | ID\_Mag\_NS         | EinsteinInitialData (Meudon\_Mag\_NS)   |
| LSUThorns       | NewRad              | EinsteinEvolve                          |
| TAT             | Periodic            | CactusNumerical                         |
| TAT             | Slab                | CactusNumerical                         |
| TAT             | SlabTest            | CactusNumerical                         |
| TAT             | TGRtensor           | EinsteinUtils                           |
| Waves           | Multipole           | EinsteinAnalysis                        |
| Waves           | WeylScal4           | EinsteinAnalysis                        |

### Apr 26 2010 — Frank Löffler
