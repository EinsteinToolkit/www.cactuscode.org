---
layout: default
title: BenchIO HDF5
---
This benchmark measures the speed at which large amounts of data can be
written to disk using the IOHDF5 I/O method and the HDF5 file format. It
does that by generating an initial data checkpoint of the simulation,
saving the current contents of 100 3-dimensional grid functions of the
application. These grid functions are all given the local size on each
processor of 80-cubed, and use REAL\*8 data types, so that each
processor contributes a total of 352 MBytes to the overall initial data
checkpoint.

At the moment this benchmark contains parameter files for different I/O
modes, each one with a different level of parallelism when doing output:
with onefile the first processor receives data from all other processors
and then does all the output to disk; 8proc uses one I/O processor per
group of 8 processors; eachproc writes one (chunked) checkpoint file per
processor.

-   [BenchIO\_HDF5\_onefile\_80l.par](BenchIO_HDF5_onefile_80l.par)
-   [BenchIO\_HDF5\_8proc\_80l.par](BenchIO_HDF5_8proc_80l.par)
-   [BenchIO\_HDF5\_eachproc\_80l.par](BenchIO_HDF5_eachproc_80l.par)
-   [BenchIO\_HDF5.thornlist](BenchIO_HDF5.thornlist)

These files are also contained in the benchmark\'s tarball.

-   [BenchIO\_HDF5.tar.gz](BenchIO_HDF5.tar.gz)

For an overview of the commands on how to download, compile and run the
benchmark see [Downloading and building the benchmark
tarballs](/community/benchmarks/tutorial).

\
\
