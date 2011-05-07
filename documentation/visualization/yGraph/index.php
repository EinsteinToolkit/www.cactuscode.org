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

		  ygraph was developed by Denis Pollney, based on the xgraph package. The source code can be obtained from the Subversion repository <a href="https://svn.cactuscode.org/VizTools/ygraph/trunk">https://svn.cactuscode.org/VizTools/ygraph/trunk</a>.
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
	    The are several options for customising aspects of and using ygraph, a manpage can be built from the source, or type <tt><font size=2>ygraph --help</font></tt> for more information.
	    	    	    </p>

	  <p>
	    If you are using thorn <tt><font size=2>CactusConnect/HTTPD</font></tt> you can setup your browser to automatically view any advertised ygraph files. Instructions on how to do this are provided in the <a href="/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.
	  </p>


	  <a name="download"></a>
	  <h3>Getting Hold of ygraph</h3>

	  
	  <p>Binaries and source code for ygraph are all available from the <a href="https://svn.cactuscode.org/VizTools/ygraph/trunk">ygraph subversion repository</a>.
	   </p>

    <h3> Compilation of ygraph on Macs</h3>
    <p>Thanks to Bruno Giacomazzo we have a step-through-like tutorial on how to
    compile ygraph on Macs:</p>
    <ol>
     <li> install svn, gtk+, gtk+2 and gtk+2-dev with Fink
     <li> <pre>svn co https://svn.cactuscode.org/VizTools/ygraph/trunk ygraph</pre>
     <li> <pre>cd ygraph</pre>
     <li> <pre>gettextize -c --no-changelog --intl</pre>
     <li> <pre>aclocal -I m4</pre> (suggested by gettextize)
     <li> <pre>touch ABOUT-NLS</pre> (otherwise it complains that this file doesn't exist)
     <li> <pre>autoreconf -i</pre>
     <li> <pre>./configure --disable-gtktest</pre> (otherwise it comlplains that gtk2 doesn't have gtk-config)
     <li> edit <pre>src/Makefile</pre> and change 'gcc' into 'gcc -arch i386' (otherwise Mac complains that the libraries installed via Fink are incompatible)
     <li>  <pre>ln -s intl/libintl.rc intl/libintl.a</pre>
     <li>  <pre>make</pre> (this will create the ygraph executable in the src subdirectory)
    </ol>

	  <a name="support"></a>
	  <h3>Support</h3>

	  <p>
	    Please direct questions about ygraph to 
	    <em>

	      <a href="
		mailto:denis.pollney@gmail.com">denis.pollney@gmail.com</a>
	    </em>
	  </p>


	</td>
      </tr>
    </table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
