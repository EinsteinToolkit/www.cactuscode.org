---
layout: default
title: Visualization Packages and Data Output Formats
sidebar: visualizations.html
---
### xgraph: Animated, Easy Client for 1D Line Plots

[xGraph](xGraph) is a freely available, lightweight and easy to use
visualization client for viewing 1D data files. It includes features for
animation, zooming and saving to postscript.

### ygraph: Animated, Easy Client for 1D Line Plots

[yGraph](yGraph) is a freely available, lightweight and easy to use
visualization client for viewing 1D data files. It includes features for
animation, zooming and saving to postscript.

### pyGraph: Animated, Easy Client for 1D Line Plots

[pyGraph](pyGraph) pygraph is a PyQt re-implementation of xGraph and
yGraph

### Gnuplot - Powerful Visualization Tool for 1D and 2D Data

[Gnuplot](gnuPlot) is a command-driven interactive function plotting
program. It can plot functions and data points in both two- and
three-dimensional plots in various formats (points, lines, surfaces,
contours).

### Amira: ZIB's Advanced 3D Visualization System

[Amira](Amira) can be used to view 3D data of scalar fields, vector
fields, tensor fields, apparent horizon multipole expansions and
gaussian curvature data, embedding coefficients, remotely computed
isosurfaces (similarly to IsoView), geodesics, and more. For remote
visualization a remote control interface for steering Cactus simulations
is also available.

### OpenDX

[OpenDX](openDX) is a uniquely powerful, full-featured software package
for the visualization of scientific, engineering and analytical data.

### DV and xvs

[DataVault](DataVaultXVS) s a powerful visualization and data analysis
package for numerical codes that solve partial differential equations
via grid-based methods, in particular those utilizing adaptive mesh
refinement (AMR) and/or running in a parallel environment.

### IsoView

[IsoView](IsoView) version 2 uses pure OpenGL to handle rendering,
making it very lightweight. IsoView V2 is a visualization client
originally developed for the CactusCode project at Lawrence Berkeley
National Laboratory, and now is maintained and developed at Louisiana
State University.

### VisIt

[VisIt](VisIt) is a state-of-the-art data visualization tool based on
the open source visualization class-library VTK and is developed and
maintained at the Lawrence Livermore National Laboratory, University of
California. VisIt is a uniquely powerful, full-featured software package
for the visualization of scientific, engineering and analytical data:
Its open system design is built on a standard interface environment. And
its sophisticated data model provides users with great flexibility in
creating visualizations.

  

Cactus Output Methods and Data Formats
--------------------------------------

The following table details output formats which can currently be
produced from Cactus thorns:

| IO method     | Description                                                            | Providing thorn           | Viz Tools                |
|---------------|------------------------------------------------------------------------|---------------------------|--------------------------|
| `Scalar`      | output of scalars or grid array reductions in xgraph or gnuplot format | `CactusBase/IOBasic`      | xgraph/ygraph, gnuplot   |
| `Info`        | screen output of scalars or grid array reductions                      | `CactusBase/IOBasic`      | xgraph/ygraph, gnuplot   |
| `IOASCII_1D`  | 1D line output of grid arrays in xgraph or gnuplot format              | `CactusBase/IOASCII`      | xgraph/ygraph, gnuplot   |
| `IOASCII_2D`  | 2D slice output of grid arrays in gnuplot format                       | `CactusBase/IOASCII`      | gnuplot                  |
| `IOASCII_3D`  | 3D slice output of grid arrays in gnuplot format                       | `CactusBase/IOASCII`      | gnuplot                  |
| `IOHDF5_2D`   | 2D slice output of grid arrays in HDF5 format                          | `CactusPUGHIO/IOHDF5`     | Amira, DV, OpenDX, VisIt |
| `IOHDF5_3D`   | full 3D output of grid arrays in HDF5 format                           | `CactusPUGHIO/IOHDF5`     | Amira, DV, OpenDX, VisIt |
| `IOFlexIO_2D` | 2D slice output of grid arrays in FlexIO format                        | `CactusPUGHIO/IOFlexIO`   | Amira                    |
| `IOFlexIO`    | full 3D output of grid arrays in FlexIO format                         | `CactusPUGHIO/IOFlexIO`   | Amira                    |
| `IOJpeg_2D`   | 2D slice output as a jpeg image                                        | `CactusIO/IOJpeg`         | web browser, xv          |
| `IOPanda`     |                                                                        | `CactusPUGHIO/IOPanda`    |                          |
| `IsoSurfacer` | Constant value isosurfaces of grid functions                           | `CactusPUGHIO/IOSurfacer` | Amira, IsoView           |

<span id="hdf5"></span>

### Cactus Postprocessing Utilities

To aid the visualisation of very large HDF5 output data, thorn
`CactusExternal/HDF5` provides a set of utility programs which can be
used to manipulate HDF5 files, independently of their driver-specific
format:

-   `hdf5_double_to_single`  
    Copies the entire contents of an input HDF5 file to an output HDF5
    file, converting all double precision datasets to single precision.
-   `hdf5_merge`  
    Merges a list of HDF5 input files into a single HDF5 output file.
    This can be used to concatenate HDF5 output data created as one file
    per timestep.
-   hdf5\_extract  
    Extracts a given list of named objects (groups or datasets) from an
    HDF5 input file and writes them into a new HDF5 output file. This is
    the reverse operation to what `hdf5_merge` does. Useful eg. for
    extracting individual timesteps from a time series HDF5 datafile.

For detail please refer to the thorn documentation of
`CactusExternal/HDF5`
