---
layout: default
title: Compiling and Running the Benchmarks
---
An overview of the steps involved in the compilation and execution of
the benchmarks follows.

We will consider the BSSN\_PUGH:

1. Download the source code
tarball:` wget http://www.cactuscode.org/community/benchmarks/Bench_BSSN_PUGH.tar.gz`

2. Extract the contents of the tarball and move to the main Cactus
directory: `tar xzvf Bench_BSSN_PUGH.tar.gz cd Cactus/` The tarball
contains a Cactus source tree with just the thorns necessary to run the
benchmark. There is a toplevel subdirectory BENCHMARKS in each tarball
which contains the parameter file and the thorn list for the benchmark.
`cd Cactus/ ls arrangements configs COPYRIGHT doc Makefile sample.c BENCHMARKS CONTRIBUTORS CVS lib options-numrel-intel src`

3. Create the configuration. It can be either: a standard configuration:
`make BSSN_PUGH_single-config` or for a better performance, a
configuration with different compilers flags and options (for example
specifying if the executable will use or not MPI - that is, wheter it
willl be suitable for a single processor or parallel machine) specified
in an [option file](http://www.cactuscode.org/Toolkit/Configs):
`make BSSN_PUGH_single-config options=>&OPTIONS<& THORNLIST=BENCHMARKS/Bench_BSSN_PUGH.thornlist`

Depending on your operating system, you may need to use gtar and gmake
instead of tar and make. The executable will be named
BSSN\_PUGH\_single. is the name of the file containing the options. We
used THORNLIST to specify the path to the thorn list.

You will be asked if you want to setup the configuration with the name
you have chosen, in our case: BSSN\_PUGH\_single. Say yes.

For configurations using specific compiler options or MPI refer to the
[Users' Guide](/Documentation/) and our page containing different
[option-files](http://www.cactuscode.org/Toolkit/Configs).

4. Build the configuration. `make BSSN_PUGH_single` You can add -j3 at
the end of the command to make the compilation faster (3 files at a
time).

5. Run the benchmark. The benchmark is available in two sizes 80x80x80
and 100x100x100. To run it for the 100x100x100 case on a single
processor machine and to redirect the result to a file called proc1.out
use:
`./exe/cactus_BSSN_PUGH_single BENCHMARKS/Bench_BSSN_PUGH_100l.par > proc1.out`
If you run the benchmark on a machine with multiple processors that
doesn't have a queue, but has mpirun installed, use:
`mpirun -np 4 ./exe/cactus_BSSN_PUGH_single BENCHMARKS/Bench_BSSN_PUGH_100l.par > proc1.out`
The proc1.out will include the results: the wall time usage the resource
usage (rusage). The reported time for benchmarking is the wall time -
from the last line: "Total time for simulation".

Below we have a screenshot of the output file:
`---------------------------------------------------------------         10                                     1   0101       ************************     01  1010 10      The Cactus Code V4.0      1010 1101 011      www.cactuscode.org        1001 100101    ************************       00010101                                     100011     (c) Copyright The Authors         0100      GNU Licensed. No Warranty         0101                                   ---------------------------------------------------------------  Cactus version: 4.0.b16 Compile date:   Apr 16 2007 (22:10:21) Run date:       Apr 16 2007 (22:31:27) Run host:       numrel02.cct.lsu.edu Executable:     ./exe/cactus_BSSN_PUGH_single Parameter file: BENCHMARKS/Bench_BSSN_PUGH_100l.par --------------------------------------------------------------- ... ... =================================================================================================== Thorn           | Scheduled routine in time bin           | gettimeofday [secs] | getrusage [secs]  =================================================================================================== BSSN_MoL        | Register provided slicings              |          0.00001700 |       0.00000000  CartGrid3D      | Register GH Extension for GridSymmetry  |          0.00000500 |       0.00000000  CoordBase       | Register a GH extension to store the coo|          0.00000200 |       0.00000000  PUGH            | Startup routine                         |          0.00000700 |       0.00000000  IOUtil          | Startup routine                         |          0.00000700 |       0.00000000  MoL             | Startup banner                          |          0.00000400 |       0.00000000  IOBasic         | Startup routine                         |          0.00000300 |       0.00000000  PUGHInterp      | PUGHInterp startup routine              |          0.00000500 |       0.00000000  PUGHReduce      | Startup routine                         |          0.00010800 |       0.00000000  SymBase         | Register GH Extension for SymBase       |          0.00000300 |       0.00000000  ---------------------------------------------------------------------------------------------------                 | Total time for CCTK_STARTUP             |          0.00016100 |       0.00000000  ... ... ... ---------------------------------------------------------------------------------------------------                 | Total time for simulation               |        728.15640200 |     724.42987000  ===================================================================================================`  
The entire output can be seen [here](/documentation/proc1.out.txt).
