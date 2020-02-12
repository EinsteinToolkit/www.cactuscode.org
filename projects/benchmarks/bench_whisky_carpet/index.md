---
layout: default
title: Bench Whisky Carpet
---
This benchmark is similar to Bench\_BSSN\_Carpet, but it solves the
relativistic Euler equations in addition to the Einstein equations. This
requires more memory and more floating point operations per grid point.
The relativistic Euler equations are implemented in the Whisky code. You
find more information on Whisky on its [web
pages](http://www.whiskycode.org/).

This benchmark comes in two sizes, 36l and 48l, which use about 400 MB
and 800 MB of main memory per CPU, and consume approximately 265.9 GFlop
and 312.8 GFlop, respectively. You should run both sizes if you have
enough memory.

For the interested reader, we make the two parameter files and the thorn
list here available.

-   [Bench\_Whisky\_Carpet\_36l.par](Bench_Whisky_Carpet_36l.par)
-   [Bench\_Whisky\_Carpet\_48l.par](Bench_Whisky_Carpet_48l.par)
-   [Bench\_Whisky\_Carpet.thornlist](Bench_Whisky_Carpet.thornlist)

These files are also contained in the benchmark\'s tarball.

-   [Bench\_Whisky\_Carpet.tar.gz](Bench_Whisky_Carpet.tar.gz)

For an overview of the commands on how to download, compile and run the
benchmark see [Downloading and building the benchmark
tarballs](/community/benchmarks/tutorial).

\
\
