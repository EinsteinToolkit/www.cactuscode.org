<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Amira';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

  <table cellpadding=10>
      <tr>
	<td>

	  <h3>Amira: ZIB's Advanced 3D Visualization System</h3>

	  <table>
	    <tr>
	      <td valign=top>
		<p>
		  <A href="http://amira.zib.de/">Amira</A> is a research software package for the development of new advanced high-end visualization methods, developed by the
		<A href="http://www.zib.de/Visual/">visualization  department</A> of the
		  <A href="http://www.zib.de">Konrad-<B>Z</B>use-Center</a> for <B>I</B>nformation Techniques <B>B</B>erlin(ZIB).
		</p>
	      </td>
	      <td valign=top>
		<a href="http://jean-luc.aei.mpg.de/NCSA1999/">
		  <img
		    border=0
		    align=right
		    src="amira1.gif"
		    alt="Amira Movies">  </a>
	      </td>

	    </tr>
	    <tr>
	      <td colspan=2>
		<p>
		  Amira can be used to view 3D data of scalar fields, vector fields, tensor fields, apparent horizon multipole expansions and gaussian curvature data, embedding coefficients, remotely computed isosurfaces (similarly to <A href="../IsoView/">IsoView</A>), geodesics, and more.  For remote visualization a remote control interface
		  for steering Cactus
		  simulations is also available.
		</p>

		<ul>
		  <li><a href="#download">Obtaining</a>

		  <li><a href="#using">Using</a>
		  <li><a href="#support">Support</a>
		</ul>
	      </td>
	      </tr>

	  </table>


	  <a name="download"></a>
	  <h3>Obtaining Amira</h3>

	  <table>
	    <tr>
	      <td>
		&nbsp;&nbsp;&nbsp;&nbsp;
	      </td>
	      <td>

		<p>
		  <strong>Demo Version</strong>
		  <br>
		  A free time-limited, but renewable demo version is
	          available for
		  <A href="http://amira.zib.de/download/">downloading
		    from ZIB</A> after registration.
		  In addition you need the (free)
		  Numerical Relativity extension for handling Cactus data.
		</p>

		<p>
		  <strong>Commercial Version</strong>
		  <br>
		  <A href="http://www.amiravis.com/">Amira</A> is
		  distributed
		  commercially through <A href="http://www.tgs.com">Template
		    Graphics Software</A>.
		  Please enquire at this site for a fully qualified version.
		</p>

		<p>

		  <strong>Special Arrangements for Cooperation Partners</strong>
		  <br>
		  Special arrangements can be established for partners
		  contributing to the Amira development process. Cooperation
		  partners may receive renewable free updates of the internal
		  development version of Amira including the newest features
                  and bugfixes. 
		</p>
		<p>
	      </p>
	      </td>

	    </tr>
	  </table>

	  <a name="using"></a>
	  <h3>Using Amira</h3>

	  <table>
	    <tr>
	      <td>

		&nbsp;&nbsp;&nbsp;&nbsp;
	      </td>
	      <td>
		<p>
		  Amira is designed for an end-user who has minimal experience
		  with visualization tools, meaning that anything deemed
		  untrivial is considered to be too complicated and
		  should be treated as a bug.
		</P>
		<P>
		  Amira provides a kind of visualization network, which
		  graphically displays the current settings and relationships
		  among the visualization components.
		  In contrast to other tools like AVS or IBM DX, you don't see
		  a (possibly complicated) data flow diagram, instead the data
		  is directly displayed
		   as (green) icons and the appropriate displays
		  pop up from right-mouse button clicks on the green icons.
		</p>

		<strong>Predefined Networks</B>
		<A href="http://www.zib.de/geodesics/">
		<img src="kerr.jpg" align=right border=0> 
		</A>
		<p>
		  While it is easy, with only a little experience,
		  to construct simple visualization
		  networks from scratch, a couple of
		  `standard' visualization networks which arise in
		  every-day work
		  with Cactus data are predefined. To get a list of all these
		  (daily growing) list of networks, simply issue
		</p>
		<font size=-1>
		  <tt>

		<PRE>
amira2000 '+?'</PRE>
	      </tt>
	      </font>
		on the command line. This will print a list of available
		networks and, for example, starting Amira with
				<font size=-1>
		<tt>
		<PRE>
amira2000 +remoteviz</PRE>

 	        </tt>
		</font>
		will launch Amira ready for retrieving data from a
		<A href="http://www.zib.de/geodesics/">remote simulation</A>.
		<P>
		<img src="1s.gif" align=right> 
		<strong>Working with 3D data</B>
		<p>
		  As an example of looking at some data set, for example 3D
		  data in FlexIO format written by Cactus, simply invoke
		  Amira with the appropriate filename, e.g.
		</p>

		<font size=-1>
		<tt>
		<PRE>
amira2000 psi0re_3d.ieee</PRE>
 	        </tt>
		</font>
		 Note that large datasets beyond the 2GB limit are
		supported and can be handled, conveniently fast, with
		on-demand loading
		<P>
		  A green data icon will appear, named according to the
		  file name.
		  From that, use the right-mouse button to select a
		  `timeslice' data set, for which a number of
		  visualization modules can be applied.
	      </td>

	    </tr>
	  </table>

	  <a name="support"></a>
	  <h3>Support</h3>

	  <table>
	    <tr>
	      <td>

		&nbsp;&nbsp;&nbsp;&nbsp;
	      </td>
	      <td>
		<p>
		  Amira is used by the following projects
		  (as part of a ZIB-AEI cooperation):
		<P>
		  <A href="http://www.zib.de/visual/projects/ART/"><strong>ART Project</strong></A> -
		  Visualization of General Relativity
		<P>
		  <A href="http://www.zib.de/visual/projects/amr/amr.en.html"><strong>AMR Project</strong></A> -
		  Visualization of Hierarchical Datasets
		<P>

		  <A href="http://www.zib.de/visual/projects/TIKSL/"><strong>TIKSL Project</strong></A> -
		  Remote Visualization
		<P>
	          <A href="http://www.griksl.org"><strong>GriKSL Project</strong></a> -
		  Remote Visualization
	        <p>
		  Please write to the individual peoples associated with these
		  projects with specific questions, or write to
		  <A href="mailto:amira@zib.de">amira@zib.de</A>
		  for general inquiries.
		</p>

		<p>
		</p>
	      </td>
	    </tr>
	  </table>



	</td>
      </tr>

    </table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
