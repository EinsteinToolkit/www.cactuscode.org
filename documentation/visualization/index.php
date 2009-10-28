<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Visualization Packages and Data Output Formats';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h3> VizLauncher </h3>
   <p>
 VizLauncher is a freely available for viewing Cactus output files using the most appropriate tools available on your local machine.</p>

   <p>
<a href="vizLauncher">VizLauncher</a> can be applied to files in your local file system, as well as output files advertised on the Files page of the Cactus simulation web browser. </p>

<h3> xgraph: Animated, Easy Client for 1D Line Plots </h3>
   <p><a href="xGraph">xGraph</a> is a freely available, lightweight and easy to use visualization client for viewing 1D data files. It includes features for animation, zooming and saving to postscript. </p> 

<h3> ygraph: Animated, Easy Client for 1D Line Plots </h3>
   <p><a href="yGraph">yGraph</a> is a freely available, lightweight and easy to use visualization client for viewing 1D data files. It includes features for animation, zooming and saving to postscript. </a>

<h3> Gnuplot - Powerful Visualization Tool for 1D and 2D Data </h3>
   <p><a href="gnuPlot">Gnuplot</a> is a command-driven interactive function plotting program. It can plot functions and data points in both two- and three-dimensional plots in various formats (points, lines, surfaces, contours). </p>

<h3> Amira: ZIB's Advanced 3D Visualization System </h3>
   <p><a href="Amira">Amira </a> can be used to view 3D data of scalar fields, vector fields, tensor fields, apparent horizon multipole expansions and gaussian curvature data, embedding coefficients, remotely computed isosurfaces (similarly to IsoView), geodesics, and more. For remote visualization a remote control interface for steering Cactus simulations is also available. </p>

<h3> OpenDX </h3>
   <p><a href="openDX">OpenDX</a> is a uniquely powerful, full-featured software package for the visualization of scientific, engineering and analytical data. </p>

<h3> DV and xvs </h3>
   <p><a href="DataVaultXVS">DataVault</a> s a powerful visualization and data analysis package for numerical codes that solve partial differential equations via grid-based methods, in particular those utilizing adaptive mesh refinement (AMR) and/or running in a parallel environment. </p>

<h3> IsoView </h3>
   <p><a href="IsoView">IsoView</a> version 2 uses pure OpenGL to handle rendering, making it very lightweight. IsoView V2 is a visualization client originally developed for the CactusCode project at Lawrence Berkeley National Laboratory, and now is maintained and developed at Louisiana State University. </p>

<h3>VisIt</h3>
<p><a href="VisIt">VisIt</a> is a state-of-the-art data visualization tool based on the open source 
visualization class-library VTK and is developed and maintained at the Lawrence 
Livermore National Laboratory, University of California. VisIt is a uniquely 
powerful, full-featured software package for the visualization of scientific, 
engineering and analytical data: Its open system design is built on a standard 
interface environment. And its sophisticated data model provides users with 
great flexibility in creating visualizations.</p>

<br />
  <h2>Cactus Output Methods and Data Formats</h2>
	  <p>
	    The following table details output formats which can
	    currently be produced from Cactus thorns:
	  </p>
	  <center>
	    <table border="1" cellpadding="5">
	      <tbody><tr>
		<th>
		  IO method
		</th>
		<th>
		  Description
		</th>
		<th>
		  Providing thorn
		</th>
		<th>
		  Viz Tools
		</th>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>Scalar</tt>
		</td>
		<td>
		  output of scalars or grid array reductions in
		  xgraph or gnuplot format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusBase/IOBasic</tt>
		</td>
		<td valign="top">
		  xgraph/ygraph, gnuplot
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>Info</tt>
		</td>
		<td>
		  screen output of scalars or grid array reductions
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusBase/IOBasic</tt>
		</td>
		<td valign="top">
		  xgraph/ygraph, gnuplot
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOASCII_1D</tt>
		</td>
		<td>
		  1D line output of grid arrays in xgraph or gnuplot format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusBase/IOASCII</tt>
		</td>
		<td valign="top">
		  xgraph/ygraph, gnuplot
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOASCII_2D</tt>
		</td>
		<td>
		  2D slice output of grid arrays in gnuplot format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusBase/IOASCII</tt>
		</td>
		<td valign="top">
		  gnuplot
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOASCII_3D</tt>
		</td>
		<td>
		  3D slice output of grid arrays in gnuplot format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusBase/IOASCII</tt>
		</td>
		<td valign="top">
		  gnuplot
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOHDF5_2D</tt>
		</td>
		<td>
		  2D slice output of grid arrays in HDF5 format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusPUGHIO/IOHDF5</tt>
		</td>
		<td valign="top">
		  Amira, DV, OpenDX, VisIt
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOHDF5_3D</tt>
		</td>
		<td>
		  full 3D output of grid arrays in HDF5 format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusPUGHIO/IOHDF5</tt>
		</td>
		<td valign="top">
		  Amira, DV, OpenDX, VisIt
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOFlexIO_2D</tt>
		</td>
		<td>
		  2D slice output of grid arrays in FlexIO format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusPUGHIO/IOFlexIO</tt>
		</td>
		<td valign="top">
		  Amira
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOFlexIO</tt>
		</td>
		<td>
		  full 3D output of grid arrays in FlexIO format
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusPUGHIO/IOFlexIO</tt>
		</td>
		<td valign="top">
		  Amira
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOJpeg_2D</tt>
		</td>
		<td>
		  2D slice output as a jpeg image
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusIO/IOJpeg</tt>
		</td>
		<td valign="top">
		  web browser, xv
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IOPanda</tt>
		</td>
		<td>
		&nbsp;
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusPUGHIO/IOPanda</tt>
		</td>
		<td valign="top">
		&nbsp;
		</td>
	      </tr>
	      <tr>
		<td bgcolor="#f5ffc3" valign="top">
		  <tt>IsoSurfacer</tt>
		</td>
		<td>
		Constant value isosurfaces of grid functions
		</td>
		<td bgcolor="#e5ffa2" valign="top">
		  <tt>CactusPUGHIO/IOSurfacer</tt>
		</td>
		<td valign="top">
		Amira, IsoView
		</td>
	      </tr>
	    </tbody></table>
	  </center>
	  
	  <a name="hdf5"></a>
<h3>Cactus Postprocessing Utilities</h3>

<p>To aid the visualisation of very large HDF5 output data, thorn <code>CactusExternal/HDF5</code>
provides a set of utility programs which can be used to manipulate HDF5 files, independently of
their driver-specific format:

<ul>
 <li><code>hdf5_double_to_single</code><br/>
    Copies the entire contents of an input HDF5 file to an output HDF5 file,
    converting all double precision datasets to single precision.</li>
 <li><code>hdf5_merge</code><br/>
    Merges a list of HDF5 input files into a single HDF5 output file.
    This can be used to concatenate HDF5 output data created as one file per timestep.</li>
 <li>hdf5_extract<br/>
    Extracts a given list of named objects (groups or datasets) from an HDF5
    input file and writes them into a new HDF5 output file.
    This is the reverse operation to what <code>hdf5_merge</code> does. Useful eg.
    for extracting individual timesteps from a time series HDF5 datafile.</li>
</ul>
</p><p>
For detail please refer to the thorn documentation of <code>CactusExternal/HDF5</code>
</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
