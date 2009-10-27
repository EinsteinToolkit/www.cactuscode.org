<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='yGraph';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

<table cellpadding=10>
      <tr>
	<td>

	  <h3>ygraph: Animated, Easy Client for 1D Line Plots</h3>

	  <table>
	    <tr>
	      <td valign="top" width="75%">
		<p>
		  ygraph is a freely available, lightweight and easy to use visualization client for viewing 1D data files.  It includes features for animation, zooming and saving to postscript. (Also see the page for <a href="../xGraph">xgraph</a>.)
		  </p>

		  <p>

		  ygraph was developed by Denis Pollney, based on the xgraph package, and much more information is available on the <a href="http://www.aei.mpg.de/~pollney/ygraph/">ygraph homepage</a>.
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
		    <a href="yGraph.gif">
		      <img 
			border=0 
			align=right 
			src="yGraph.gif" 
			alt="XGraph Image"></a>
		  </p>
		</td>
	      </tr>
	    </table>
	  </center>

	    

	  <a name="using"></a>
	  <h3>Using ygraph</h3>
	  
	  <p>
	    ygraph can be used to view
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
	    The are several options for customising aspects of and using ygraph, see the <a	 href="http://www.aei.mpg.de/~pollney/ygraph/ygraph.html">man
	    page</a> or type <tt><font size=2>ygraph --help</font></tt> for more information.
	    	    	    </p>

	  <p>
	    If you are using thorn <tt><font size=2>CactusConnect/HTTPD</font></tt> you can setup your browser to automatically view any advertised ygraph files. Instructions on how to do this are provided in the <a href="/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.
	  </p>


	  <a name="download"></a>
	  <h3>Getting Hold of ygraph</h3>

	  
	  <p>Binaries and source code for ygraph are all available from the <a href="http://www.aei.mpg.de/~pollney/ygraph">ygraph home page</a>
	   </p>

	  <a name="support"></a>
	  <h3>Support</h3>

	  <p>
	    Please direct questions about ygraph to 
	    <em>

	      <a href="
		mailto:pollney@aei.mpg.de">pollney@aei.mpg.de</a>
	    </em>
	  </p>


	</td>
      </tr>
    </table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
