<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='DataVault and XVS';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

<h3>Data Visualization with DV and xvs</h3> 

DV (DataVault) and xvs are freely available visualization packages, written by <a href="http://laplace.physics.ubc.ca/People/matt/">
Matthew W. Choptuik</a>.
<p>
DV is a powerful visualization and data analysis package for numerical codes that solve partial differential equations via grid-based methods, in particular those utilizing adaptive mesh refinement (AMR) and/or
running in a parallel environment.<br>
DV provides a comprehensive set of built-in functions to analyze 1D, 2D, and 3D time-dependent datasets, eg.
<ul>
  <li>simple arithmetics
  <li>duplicating and merging datasets
  <li>filtering/masking
  <li>differentiation
</ul>
<p>
xvs is a visualization tool for analyzing, among other things, the output of time-dependent PDEs in one spatial dimension (or time dependent cuts of higher-d solutions).
<p> 
Since DV and xvs use the OpenGL graphics library, they can take full advantage of the prodigious hardware of modern PC graphics cards. The OpenGL model also provides fast and intuitive, mouse-based rotation and zooming of rendered
images.
<p>
For general information on scientific data visualization using DV and xvs please refer to the
<a href="http://laplace.physics.ubc.ca/Doc/DV/">DV tutorial</a> and the
<a href="http://laplace.physics.ubc.ca/~matt/410/Doc/xvs/">xvs
documentation</a>. Download and installation instructions for DV and xvs can be found
<a href="http://laplace.physics.ubc.ca/People/matt/rnpletal.html">here</a>.<br>
Also check out the UBC Physics & Astronomy Theory/Numerical Relativity
<a href="http://laplace.physics.ubc.ca/Group/Software.html">Software and Related page</a>.
<p>

<img border=0 align="right" src="DV.jpg" width="100" length="100" alt="DV Visualization">

<img border=0 align=right src="xvs.jpg" width="100" length="100"
alt="xvs Visualization">

<h3>The DataVaultXVSutils Package</h3>

Both DV and xvs expect the data to be analyzed in SDF (simple data format). Cactus does not support this format therefore data format conversion utilities are needed.<br>
The DataVaultXVSutils package provides two utility programs which convert Cactus output data into SDF:
<ul>
  <li><tt>hdf5todv</tt><br>
      A utility program which reads an HDF5 datafile and sends its selected datasets in SDF format to a DV visualization server.
      Because DV is able to process unigrid as well as FMR datasets HDF5 output files from both PUGH and Carpet can be sent and visualized.
  <li><tt>ascii1Dtoxvs.pl</tt><br>
      A perl script which reads 1D output files in ASCII format (as created by thorn <tt>CactusBase/IOASCII</tt>) and sends them to an xvs visualization server.
      Both gnuplot and xgraph/ygraph output files are supported.
</ul>


<h4>Downloading and Installing</h4>

The OpenDXutils package can be downloaded from the Cactus CVS server via anonymous checkout:
<pre>
  cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus login    # password is 'anon'
  cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus checkout VizTools/DataVaultXVSutils
</pre>
A <tt>GNUmakefile</tt> is supplied with the package in order to build the
<tt>hdf5todv</tt> utility program. As prerequisites, HDF5 and the SDF libraries must be installed on your system.

<h4>Selecting Datasets with <tt>hdf5todv</tt></h4>

<tt>hdf5todv</tt> can be called with an optional index vector to select individual datasets in the HDF5 input file.
The vector can be given as a comma-separated list of individual dataset indices and/or as a <it>min-max</it> range with '*' as wildcard character and an optional output frequency argument.<br>
For example,
<pre>
  hdf5todv -i '0,10,20-*/2' alp.h5
</pre>
would select the first and the tenth dataset, and also every other dataset in the HDF5 input file <tt>alp.h5</tt> starting from dataset 20.

<h3>Support and Acknowledgements</h3>

<a href=http://www.aei.mpg.de/~tradke>Thomas Radke</a> is the author and maintainer of the DataVaultXVSutils package. The development work has been supported
by the <a href=http://www.dfn.de>Deutsches Forschungsnetz Verein</a> through the <a href=http://www.griksl.org>GriKSL project</a> under contract TK 602 -
AN 200.
<p>
Please report bugs and send any comments to the
<a href=mailto:tradke@aei.mpg.de>maintainer</a> of the DataVaultXVSutils package.
<p>
The software in the DataVaultXVSutils package is available under the GNU General Public License. In addition to the conditions in the GNU General Public License, the authors strongly suggest <strong>using this software for non-military purposes
only.</strong>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
