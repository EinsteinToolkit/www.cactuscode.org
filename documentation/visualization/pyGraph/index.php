<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='pyGraph';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

<table cellpadding=10>
      <tr>
	<td>

	  <h3>pyGraph: Animated, Easy Client for 1D Line Plots</h3>

	  <table>
	    <tr>
	      <td valign="top" width="75%">
		<p>
		  pyGraph is a freely available, lightweight and easy to use visualization client for viewing 1D data files which started out as a python re-implementation of <a href="../yGraph">yGraph</a>..  It includes features for animation, zooming and saving to png. (Also see the page for <a href="../yGraph">ygraph</a>.)
		  </p>

		  <p>

		  pyGraph was developed by David Radice. The source code can be obtained from the Mercurial repository <a href="https://bitbucket.org/dradice/pygraph/">https://bitbucket.org/dradice/pygraph/</a>. pyGraph relies on <a href="https://bitbucket.org/dradice/scidata/">https://bitbucket.org/dradice/scidata/</a> to read in Cactus data files.
		</p>
	      </td>
	      <td valign="top">
		<ul>
		  <li><a href="#download">Download</a>
		  <li><a href="#using">Using</a>

		  <li><a href="#support">Support</a>
		</ul>
	      </td>
	    </tr>
	  </table>

	  <center>
	    <table>
	      <tr>

		<td>
		  <p>
		    <a href="pyGraph.png">
		      <img 
			border=0 
			align=right 
			src="pyGraph.png" 
			alt="pyGraph main window"></a>
		  </p>
		</td>
	      </tr>
	    </table>
	  </center>

	    

	  <a name="using"></a>
	  <h3>Using pyGraph</h3>
	  
	  <p>
	    pyGraph can be used to view
	    one or multiple 1D data files with the format
	  </p>
	  <tt>
	  <pre>
"Time=0.0
0.0  0.0
0.2  0.04
0.4  0.16
0.6  0.36
0.8  0.64
1.0  1.0

"Time=1.0
0.0  0.0
0.2 -0.04
0.4 -0.16
0.6 -0.36
0.8 -0.64
1.0 -1.0</pre>
	</tt>

	<p>
	Such files can be created with the Cactus thorns <tt><font size=2>CactusBase/IOASCII</font></tt> and <tt><font size=2>CactusBase/IOBasic</font></tt>

	  <p>
	    Viewing files is as easy as typing 
	  </p>
	  <tt>

	    <pre>
ygraph &lt;data filename&gt; &lt;data filename&gt;</pre>
	</tt>


	  <p>
	    The are several options for customising aspects of and using ygraph, a manpage can be built from the source, or type <tt><font size=2>pygraph --help</font></tt> for more information.
	    	    	    </p>

	  <p>
	    If you are using thorn <tt><font size=2>CactusConnect/HTTPD</font></tt> you can setup your browser to automatically view any advertised ygraph files. Instructions on how to do this are provided in the <a href="/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.
	  </p>


	  <a name="download"></a>
	  <h3>Getting Hold of pyGraph</h3>

	  
	  <p>Binaries and source code for ygraph are all available from the <a href="https://bitbucket.org/dradice/pygraph/">pyGraph mercurial repository</a>.
	   </p>

    <h3> Installation </h3>
    <p>pyGraph requires the following packages to be available
    <ul>
      <li>PyQt-4, including its development tools for pyrcc4</li>
      <li>PythonQwt</li>
    </ul>
    and once those are installed pygraph and its scidata depency can be installed using pip
    <pre>
        pip install --user hg+https://bitbucket.org/dradice/scidata
        pip install --user hg+https://bitbucket.org/dradice/pygraph
    </pre>
    </p>

	  <a name="support"></a>
	  <h3>Support</h3>

	  <p>
	    Please direct questions about pyGraph to its bitbucket ticket page
	      <a href="https://bitbucket.org/dradice/pygraph/issues">https://bitbucket.org/dradice/pygraph/issues</a>
	  </p>


	</td>
      </tr>
    </table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
