---
layout: default
title: Bench BSSN Carpet
---
This benchmark is similar to Bench\_BSSN\_PUGH, but it uses mesh
refinement instead of a uniform grid. It also uses the driver Carpet
instead of PUGH. You find more information about Carpet on its [web
page](http://www.carpetcode.org/). Carpet is still under development. It
scales up to about 100 processors.

This benchmark comes in two configurations, 1lev and 3lev. The first is
a unigrid configuration, which should in an ideal world show the same
performance characteristics as PUGH. The second is a mesh refinement
configuration, which requires more commBunication for the same number of
grid points. In return, there is more spatial and temporal resolution.
You should run both configurations.

Each configuration comes in two sizes: 1lev\_60l and 3lev\_32l use about
400 MB, and 1lev\_75l and 3lev\_42l use about 800 MB of main memory per
CPU. You should run both sizes of each configuration if you have enough
memory.

For the interested reader, we make the two parameter files and the thorn
list here available.

-   [Bench\_BSSN\_Carpet\_1lev\_60l.par](Bench_BSSN_Carpet_1lev_60l.par)
-   [Bench\_BSSN\_Carpet\_1lev\_75l.par](Bench_BSSN_Carpet_1lev_75l.par)
-   [Bench\_BSSN\_Carpet\_3lev\_32l.par](Bench_BSSN_Carpet_3lev_32l.par)
-   [Bench\_BSSN\_Carpet\_3lev\_42l.par](Bench_BSSN_Carpet_3lev_42l.par)
-   [Bench\_BSSN\_Carpet.thornlist](Bench_BSSN_Carpet.thornlist)

These files are also contained in the benchmark\'s tarball.

-   [Bench\_BSSN\_Carpet.tar.gz](Bench_BSSN_Carpet.tar.gz)

For an overview of the commands on how to download, compile and run the
benchmark see [Downloading and building the benchmark
tarballs](/community/benchmarks/tutorial).

\
\
