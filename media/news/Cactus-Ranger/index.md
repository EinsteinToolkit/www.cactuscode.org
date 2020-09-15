---
layout: default
title: Cactus Benchmarks Run on Ranger
sitemap_exclude: true
---
The Cactus group at LSU successfully ported the Cactus framework to
[Ranger](http://www.tacc.utexas.edu/services/userguides/ranger), the new
60,000 core supercomputer at [TACC](http://www.tacc.utexas.edu), and ran
a series of numerical relativity benchmarks there. We are happy to
report that these benchmarks scale up to 4096 cores, the maximum job
size possible while Ranger is still in "friendly user" mode. Ranger is
one of the largest computational resources in the world, consisting of
3,936 16-way SMP compute-nodes with 123 TByte of memory, and with a
theoretical peak performance of 504 TFlop/s.

Our benchmarks use a hybrid communication scheme combining MPI and
OpenMP, using the shared memory capabilities of Ranger's nodes to reduce
the memory overhead of parallelisation. We are grateful for the help we
received from Ranger's support team and are looking forward to using the
full machine in the near future.

The graph below shows weak scaling tests for two unigrid and one
nine-level [mesh refinement](http://www.carpetcode.org/) benchmark
solving the Einstein equations. The problem size was kept fixed per
core, and there were 4 OpenMP threads per MPI process, with 1 MPI
process per socket. (The PUGH benchmark was run only up to 1024 cores.)
As the graphs show, this benchmark scales near perfectly in unigrid, and
has only small variations in run time for nine levels of mesh
refinement.

[<img src="Ranger.png" style="width:75.0%" />](Ranger.png)

### 15 Jan 2008 — elena
