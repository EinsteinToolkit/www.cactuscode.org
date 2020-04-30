---
layout: default
title: Bench BSSN PUGH
---
This benchmark is, together with CactusIO\_FlexIO, a descendent of the
oldest Cactus benchmarks. It uses the CactusEinstein infrastructure to
evolve a vacuum spacetime, using the BSSN formulation of the Einstein
equations. It employs finite differencing in space, an explicit time
integration method, and relies on the driver PUGH for distributing grid
functions over processors.

PUGH is a mature and efficient memory management and communication
driver in Cactus. PUGH uses MPI for communication; it has been shown to
scale up to thousands of processors on essentially all computing
architectures that there are, from small notebooks to the worlds largest
supercomputing installations.

This benchmark comes in two sizes, 80l and 100l, which use about 400 MB
and 800 MB of main memory per CPU, and consume approximately 340.1 GFlop
(8300 Flops per gridpoint) and 337.0 GFlop, respectively. You should run
both versions if you have enough memory.

For the interested reader, we make the two parameter files and the thorn
list here available.

-   [Bench\_BSSN\_PUGH\_80l.par](Bench_BSSN_PUGH_80l.par)
-   [Bench\_BSSN\_PUGH\_100l.par](Bench_BSSN_PUGH_100l.par)
-   [Bench\_BSSN\_PUGH.thornlist](Bench_BSSN_PUGH.thornlist)

These files are also contained in the benchmark's tarball.

-   [Bench\_BSSN\_PUGH.tar.gz](Bench_BSSN_PUGH.tar.gz)

For an overview of the commands on how to download, compile and run the
benchmark see [Downloading and building the benchmark
tarballs](/community/benchmarks/tutorial).

  
  
