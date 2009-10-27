<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='vizLauncher';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>


		<p>
		  VizLauncher is a freely available for viewing Cactus output files using the most appropriate tools available on your local machine.
		</p>

		<p>
		  VizLauncher can be applied to files in your local file system, as well as output files advertised on the Files page of the Cactus simulation web browser. 
		</p>

		<p>
		  For example, click on a HDF5 file in the browser, and you get a choice of known clients to view it with, including simple text clients (h5ls) and powerful viz tools.
		</p>
		      <p>
			<img align=left src="vizLauncher2.gif">
		      </p>
		
		<font size=0>VizLauncher can be used with <br>
		  all these files advertised to
		  thorn HTTPD</font>

		<br />
		<a href="vizLauncher1.gif">
		  <img border=5 width=300 align="right" src="vizLauncher1.gif"></a>
<p>
		Choose OpenDX and VizLauncher will give you a choice of 
		appropriate networks to use with the data:
		</p>
		<img align="left" src="vizLauncher3.gif">
	  <br />
	  <br />
	  
	  <a name="using">
	  <h3>Using VizLauncher</h3>
	  </a>
	  
	  <p>
	    The VizLauncher is easy to use, all you need to do (once you have installed the various visualization clients on your machine), is click on a file link in your simulation web browser.<br>
        You can also use the VizLauncher directly from the command line by just giving it an output filename as a single argument.
	   </p>
      <p> 
        In order to launch visualizations with OpenDX, the VizLauncher script needs to know where to find appropriate OpenDX networks. For that it will check the environment variable DX_NETWORK_DIRS which should contain a list of directories (separated by colons) containing OpenDX network files (*.net).<br>
        Some example OpenDX network files for both file- and stream-based visualizations of HDF5 data can be found in the OpenDXUtils package.
      </p>

      <p>
	    Full instructions for installing and using the VizLauncher are available in the 
	    <a href="/documentation/tutorials/vizLauncherHowTo.txt">HOWTO</a>.
	  </p>
	  
	  <p>
	    To test out your installation, try viewing files on the "Files" page of our 
	    <a href="http://origin.aei.mpg.de:7990">perpetual Cactus simulation</a> of the WaveToy demo.
	  </p>
	  <p>

	    VizLauncher handles the following Visualization clients and tools, which must all be installed and in your default path.
	    Instructions for obtaining, installing and using these tools are available on the Cactus <a href="/documentation/guides/visualization/">VizTools</a>
	    web page, and in the various 
	    <a href="/documentation/tutorials/">HOWTOs</a>
	  </p>
<h3>
	      VizLauncher Clients:
</h3>
	<ul>
	    <li><a href="/documentation/guides/visualization/xGraph/">xgraph</a></li>
	    <li><a href="/documentation/guides/visualization/gnuPlot/">gnuplot</a></li>
	    <li><a href="/documentation/guides/visualization/Amira">Amira</a></li>
	    <li><a href="/documentation/guides/visualization/openDX">OpenDX</a></li>
	    <li><a href="/documentation/tutorials/hdf5HowTo.txt">HDF5 tools (h5ls, h5dump)</a></li>
	</ul>
	  <a name="download">
	  <h3>Downloading VizLauncher</h3>
	  </a>
	  		<p>
		  VizLauncher is a Perl script, from CVS as described 
		  in the 
		  <a href="/documentation/tutorials/vizLauncherHowTo.txt">HOWTO</a>.
		
		</p>


	  <a name="problems">
	  <h3>Known Problems</h3>
	  </a>
		<p>
The VizLauncher output for h5ls and h5dump will not contain the scroll bar on all systems. This is a problem not with the VizLauncher, but with the xmessage package which is uses.
		</p>


	  <a name="support"></a>
<p>		  VizLauncher was written by Thomas Radke, and is supported by the Cactus Team.</p>
		<p>
		  Please direct questions about VizLauncher to 
		    <a href="
		      mailto:cactusmaint@cactuscode.org">cactusmaint@cactuscode.org</a>
		</p>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
