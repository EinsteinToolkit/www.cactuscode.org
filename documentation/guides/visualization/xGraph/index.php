<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='xGraph';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

    <table cellpadding=10>
      <tr>
	<td>

	  <h3>xgraph: Animated, Easy Client for 1D Line Plots</h3>

	  <table>
	    <tr>
	      <td valign=top width=75%>
		<p>
		  xgraph is a freely available, lightweight and easy
		  to use visualization client for viewing 1D data
		  files.  It includes features for animation, zooming
		  and saving to postscript. Also see the page for <a
		  href="../Visualization/yGraph">ygraph</a>
		</p>
	      </td>

	      <td valign=top>
		<ul>
		  <li><a href="#download">Downloading</a>
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
		    <a href="../images/xGraph2.gif">

		      <img 
			border=0 
			align=right 
			src="../images/xGraph2.gif" 
			alt="XGraph Image"></a>
		  </p>
		</td>
	      </tr>
	    </table>
	  </center>
	    

	  <a name="using"></a>
	  <h3>Using xgraph</h3>

	  
	  <p>
	    xgraph can be used to view
	    1D data files with the format
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
	    Viewing a file is as easy as typing 
	  </p>

	  <tt>
	    <pre>
xgraph &lt;data filename&gt;</pre>
	</tt>


	  <p>
	    The are many options for customising aspects of and using xgraph
	    (for example an animation option), type <tt><font size=2)>xgraph -help</font></tt> 
	    to see them. The image at the top of the page was created 
	    from the above data using
	    <tt>

	  <pre>
xgraph xgraph.dat -lw 2 -P -t "Easy Plot"</pre>
	</tt>
	  </p>
	  
	  <p>
	    If you are using thorn <tt><font size=2>CactusConnect/HTTPD</font></tt> you can 
	    setup your browser to automatically view any advertised 
	    xgraph files. Instructions on how to do this are provided in
	    the <a href="../Documentation/webServerHowTo.txt">WebServer-HOWTO</a>.
	  </p>


	  <a name="download"></a>
	  <h3>Downloading xgraph</h3>
	  
	  <table>
	    <tr>
	      <td>
		&nbsp;&nbsp;&nbsp;&nbsp;
	      </td>

	      <td>
		<p>
		  <strong>Binaries</strong>
		  <br>
		  Statically linked executables for some platforms
		  are <a href="
		    http://jean-luc.aei.mpg.de/Codes/xgraph/">available</a>
		</p>
		<p>

		  <strong>Source Code from Tarfile</strong>
		  <br>
		  A tarfile containing the source code for the latest 
		  distribution will soon be made available.
		</p>
		
		<p>
		  <strong>Source Code from CVS Repository</strong>
		  <br>
		  Checking out from the Cactus CVS Repository allows you 
		  to easily 
		  update your code to obtain bug fixes or enhancements or to 
		  contribute back to us your own improvements. If you are 
		  choosing
		  this option, you may wish to get update messages for any 
		  commits to the repository, if so, please contact us.
		</p>

		<p>
		  <tt><pre>
cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus login
CVS password: anon
cvs -d :pserver:cvs_anon@cvs.cactuscode.org:/cactus co -d \
           xgraph VizTools/xgraph</pre>
	      </tt>
	      </p>
	      </td>
	    </tr>
	  </table>

	  <a name="support"></a>
	  <h3>Support</h3>

	  <p>
	    Please direct questions about xgraph to 
	    <em>
	      <a href="
		mailto:cactusmaint@cactuscode.org">cactusmaint@cactuscode.org</a>
	    </em>
	  </p>


	</td>
      </tr>
    </table>



<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
