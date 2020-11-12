---
layout: default
title: Benchmarks and Profiling With Cactus Applications
---
Cactus applications have been widely used for benchmarking for machine
procurement and testing, for understanding performance characteristics,
and for profiling and optimization studies. The Cactus Team regularly
run the benchmarks on this page with different architectures, compilers,
MPI implementations etc. More details about publications and reports
resulting from this work can be found on our [publications
page](http://www.cactuscode.org/Papers/performance). Sasanka Madiraju's
[master
thesis](http://www.cactuscode.org/Articles/Cactus_Madiraju06.pdf/)
presents the performance of Cactus benchmarks on different machines and
architectures. A 2005 [report to
NSF](http://www.cactuscode.org/Articles/Common_Frameworks.pdf) describes
why Cactus provides a good benchmarking platform. Also see the
[News](http://www.cactuscode.org/News/):
[CactusADM](http://www.cactuscode.org/News/cactusadm) is now part of the
2006 edition of the SPEC benchmark suite.

To read a description of the significance and profile of BSSN\_PUGH,
along with performance and scaling results with various architectures,
see *["A Scientific Application Benchmark using the Cactus
Framework"](http://www.cactuscode.org/Articles/Cactus_Allen07a.pre.pdf)*

### Standard Benchmarks

We currently maintain five standard benchmarking applications:

-   [Bench\_BSSN\_PUGH](bench_bssn_pugh): A numerical relativity code
    using finite differences on an uniform structured grid. It uses the
    CactusEinstein infrastructure to evolve a vacuum spacetime, using
    the BSSN formulation of the Einstein equations. It employs finite
    differencing in space, an explicit time integration method. Download
    [Bench\_BSSN\_PUGH.tar.gz](../Benchmarks/Bench_BSSN_PUGH.tar.gz)
-   [Bench\_BSSN\_Carpet](bench_bssn_carpet): A numerical relativity
    code using [mesh
    refinement](https://bitbucket.org/eschnett/carpet.git). It is
    similar to BSSN\_PUGH, but instead of a uniform structured grid it
    uses the Carpet driver. Download
    [Bench\_BSSN\_Carpet.tar.gz](Bench_BSSN_Carpet.tar.gz)
-   [Bench\_Whisky\_Carpet](bench_whisky_carpet): A [relativistic
    hydrodynamics](http://www.whiskycode.org/) code using mesh
    refinement. It is similar to BSSN\_Carpet, but it solves the
    relativistic Euler equations in addition to the Einstein equations.
    Download [Bench\_Whisky\_Carpet.tar.gz](Bench_Whisky_Carpet.tar.gz)
-   [BenchIO\_FlexIO](benchio_flexio): An I/O benchmark using John
    Shalf's FlexIO library. It measures the speed of writing simulation
    data to disk using the IOFlexIO I/O method. Download
    [BenchIO\_FlexIO.tar.gz](BenchIO_FlexIO.tar.gz)
-   [BenchIO\_HDF5](benchio_hdf5): An I/O benchmark using the
    [HDF5](http://hdf.ncsa.uiuc.edu/HDF5/) library. It measures the
    speed of writing simulation data to disk using the HDF5 I/O method.
    Download [BenchIO\_HDF5.tar.gz](BenchIO_HDF5.tar.gz)
-   Bench\_ADM: historical benchmark that has been replaced by
    BSSN\_PUGH. It uses a different numerical formulation of the
    equations of general relativity (ADM). It also forms part of the
    SPEC CPU2006.

------------------------------------------------------------------------

Each tarball contains a Cactus source tree with just the thorns
necessary to run the benchmark.

We have combined the above tarballs into one:
[Cactus.tar.gz](Cactus.tar.gz). The same source code (but without the
benchmarking parameter files and thorn lists) is available from our CVS
repositories with the tag benchmark\_20051007.

-   [Downloading and building the benchmark tarballs](tutorial)
-   [Benchmark
    database](http://www.cactuscode.org/old/Benchmark/BenchDB/query.php)

### Pre-2004 Benchmarks

We also maintain a number of results on our old site. The following link
has previous results from for a number of different benchmarks and
target architectures.

-   [Pre-2004 benchmarks](http://www.cactuscode.org/old/Benchmark/)

  
  
