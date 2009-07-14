<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='gnuPlot';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='visualization';?>

    <table cellpadding=1>
      <tr>
	<td>

	<h3>Gnuplot - Powerful Visualization Tool for 1D and 2D Data</h3>

	<table>
	    <tr>
	      <td valign=top width="70%">
		<p>
		  Gnuplot is a command-driven interactive function plotting program.  It can plot functions and data points in both two- and three-dimensional plots in various formats (points, lines, surfaces, contours).  A set of built-in terminal drivers support many different graphics devices, eg. for plotting to different types of terminals or for generating GIF, postscript, latex files.
		</p>
		
		<p>
		  Gnuplot is free software. It is available on a variety of platforms and architectures.
		</p>

	      </td>

	      <td valign=top>
		<a href="../images/gnuPlot1.gif">
		  <img border=0 align=right width=400 height=400 src="../images/gnuPlot1.gif"
		    alt="Gnuplot Image"></a>
	      </td>
	    </tr>

	    <tr>

	      <td colspan=2>
		<p>
		  The gnuplot home page <a
		    href="http://www.gnuplot.info"> www.gnuplot.info</a> provides the latest official release, along with documentation, a FAQ list, and links to more information.  Gnuplot development is managed by SourceForge. The latest development source code version can be checked out on the
		  <a href="http://sourceforge.net/projects/gnuplot/">SourceForge CVS page for gnuplot</a>. The SourceForge ftp server also contains <a href="ftp://gnuplot.sourceforge.net/pub/gnuplot/"> development tarballs with source code and binaries</a> of the most recent stable gnuplot version.
		  <br>

		  Since in many software distributions only an older version of gnuplot is included, we provide
<a href="http://jean-luc.aei.mpg.de/Codes/gnuplot/">  statically linked Linux executables of gnuplot 4.0.0</a> (with mouse support for rotating/scaling/zooming and pm3d support for drawing color/gray maps and surfaces).
		</p>
	      </td>
	    </tr>
	  </table>

	  <table width="100%">

	    <tr>
	      <td align=left valign=top>
		<H1>Using gnuplot with Cactus</H1>
		<P><STRONG>Erik Schnetter</STRONG></P>
		<P><STRONG>June 17, 2001</STRONG></P>
	      </td>
	  </table>

	  <H3>Abstract:</H3>
	  <p>
	    At the time of this writing, there are two supported client programmes available to display Cactus ASCII output graphically, namely <a href="../visualization/xGraph"><i>xgraph</i></a> and <i>gnuplot</i>.
	    Although xgraph is the default output format, gnuplot offers many more features to the intermediate and expert user. Among those are the capability to choose which part(s) of the dataset to display, or to combine with other data. Below you find an introduction to creating and viewing Cactus ASCII output files in the gnuplot format. Step by step you are then introduced to more advanced features of gnuplot.
	  </p>

	  <BR>

	  <H2><A NAME="SECTION1">
	      Contents</A>
	  </H2>

	  <UL>
	    <LI><A NAME="tex2html19"
		href="gnuPlot">Contents</A>
	    <LI><A NAME="tex2html20"
		href="gnuPlot#SECTION2">1. Choosing gnuplot output in Cactus</A>

	    <LI><A NAME="tex2html21"
		href="gnuPlot#SECTION3">2. Producing some example files</A>
	    <LI><A NAME="tex2html22"
		href="gnuPlot#SECTION4">3. First steps</A>
	    <LI><A NAME="tex2html23"
		href="gnuPlot#SECTION5">4. Brushing up the graphs</A>
	      <UL>
		<LI><A NAME="tex2html24"
		    href="gnuPlot#SECTION51">4.1. Comfortable input</A>
		<LI><A NAME="tex2html25"
		    href="gnuPlot#SECTION52">4.2. Basic "<tt><font size=2>set</font></tt>" options</A>

		<LI><A NAME="tex2html26"
		    href="gnuPlot#SECTION53">4.3. Combining several graphs</A>
		<LI><A NAME="tex2html27"
		    href="gnuPlot#SECTION54">4.4. Saving the output / Printing</A>
	      </UL>
	    <LI><A NAME="tex2html28"
		href="gnuPlot#SECTION6">5. Plotting 2D output files</A>
	    <LI><A NAME="tex2html29"
		href="gnuPlot#SECTION7">6. Getting professional</A>
	    <LI><A NAME="tex2html30"
		href=gnuPlot#SECTION8">7. Some advanced options</A>

	      <UL>
		<LI><A NAME="tex2html31"
		    href="gnuPlot#SECTION81">7.1. Downsampling</A>
		<LI><A NAME="tex2html32"
		    href="gnuPlot#SECTION82">7.2. Rescaling</A>
		<LI><A NAME="tex2html33"
		    href="gnuPlot#SECTION83">7.3. Scripting</A>
	      </UL>
	    <LI><A NAME="tex2html34"
		href="gnuPlot#SECTION9">8. 3D plots of time evolutions</A>
	    <LI><A NAME="tex2html35"
		href="gnuPlot#SECTION10">9. Closing remarks</A>

	  </UL>

	  <P>

	  <H1><A NAME="SECTION2">
	      1. Choosing gnuplot output in Cactus</A>
	  </H1>

	  <P>
	    By default, the thorns IOBasic and IOASCII produce xgraph output. You have to set the parameters

	  <P>

	  <BLOCKQUOTE>
	    <TT>IOBasic::outScalar_style = "gnuplot"</TT>
	  </BLOCKQUOTE>
	  <P>
	  <BLOCKQUOTE><TT>IOASCII::out1D_style = "gnuplot f(x)"</TT>
	  </BLOCKQUOTE>
	  <p>
	    to get gnuplot output. The basic file contents will be the same, but the file will have a slightly different structure.
	  </p>

	  <H1><A NAME="SECTION3">
	      2. Producing some example files</A>
	  </H1>

	  <P>
	    By default, 1D ASCII output from the released Cactus thorns uses xgraph format, and most of the example  parameter files distributed with thorns follow this  convention. The parameter file <i>wavetoyc_gnuplot.par</i> in thorn <strong>WaveToyC</strong> in the <strong>CactusWave</strong> arrangement produces gnuplot output, demonstrating all released output methods which can produce gnuplot output.
	    To test this out:
	  </P>

	  <OL>
	    <LI>Create an application <tt><font size=2>wavetoy</font></tt> consisting of the standard WaveToy example
	    </LI>
	    <LI>Type <tt><font size=2>make wavetoy-examples</font></tt> to get some sample parameter files in the directory
	    <tt><font size=2>examples/wavetoy</font></tt>

	    </LI>
	    <LI>Run the parameter file <i>wavetoyc_gnuplot.par</i>
	    </LI>
	  </OL>
	  <p>
	    You should now have an output file called
	    <tt><font size=2>phi.xl</font></tt>. If you look into this file, you should see some hash characters (<tt><font size=2>#</font></tt>) and no lonely double quotes. Hash characters are used in gnuplot files, while lonely double quotes are used in xgraph files.
	  </p>

	  <H1><A NAME="SECTION4">
	      3. First steps</A>
	  </H1>

	  <P>
	    If gnuplot is not already installed on your machine, either ask your system administrator to install it, or follow the download/installation instructions below. The current version of gnuplot is about 3.7. (Earlier versions might not support all of the commands mentioned below.)  You start gnuplot by typing <tt><font size=2>gnuplot</font></tt> in a terminal. You will see a long banner of about 20 lines, and then the prompt <tt><font size=2>gnuplot&gt;</font></tt>. Gnuplot is  terminal-driven -- that means that you have to type your commands.
	  </p>

	  <P>
	    While in gnuplot you can change directories using the <tt><font size=2>cd</font></tt> command much like you do in your shell. The difference is that the directory name has to be enclosed in double quotes. So, if you are not already in the directory containing the output files, go there now.
	  </p>

	  <P>
	    The basic gnuplot command is <tt><font size=2>plot</font></tt>. You can plot functions (<tt><font size=2>plot sin(x)</font></tt>) and files. To plot phi vs.&nbsp;x, you'd say
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; with lines</TT>

	  </BLOCKQUOTE>
	  <p>
	    You will see phi plotted vs.&nbsp;x. Each curve is for one time step. In order to choose a particular time only, you say
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 10 with points</TT>
	  </BLOCKQUOTE>
	  <p>
	    where "<tt><font size=2>index 10</font></TT>" selects the 10th output (numbering starts from zero). The general form of the "<tt><font size=2>index</font></tt>" option is "<tt><font size=2>index  FROM:TO:STRIDE</font></tt>", so that the command
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 10:20:5 with linespoints</TT>
	  </BLOCKQUOTE>
	  <p>
	    plots the 10th, 15th, and 20th output with connected points. Note that you cannot change the relative order of the "<tt><font size=2>index</font></tt>" and "<tt><font size=2>with</font></tt>" options; the <tt><font size=2>index</font></tt> option has to come before <tt><font size=2>with</font></tt>.
	  </p>

<P>
You can zoom in by specifying ranges in the x and y direction, as with

<P>
<BLOCKQUOTE>
<TT>plot [0:2][-0.25:] &#34;phi.xl&#34; index 10:20:5
with linespoints</TT>

</BLOCKQUOTE>
which chooses the range [0:2] for the x axis and [-0.25:YMAX] for the y axis. ymax is automatically determined through the data you plot.

<P>
You get help with "<tt><font size=2>help</font></tt>", especially with "<tt><font size=2>help plot</font></tt>".


<P>
You quit gnuplot with "<tt><font size=2>quit</font></tt>".

<P>

	  <H1><A NAME="SECTION5">
	      4. Brushing up the graphs</A>
	  </H1>

	  <P>

	  <H2><A NAME="SECTION51">
	      4.1 Comfortable input</A>
	  </H2>

	  <P>
	    You noticed likely that, once you typed a command, the next command is often very similar. Instead of retyping the whole command, you can use the cursor keys to get to what you typed previously and edit that command. This is in general much faster. If your cursor keys don't work (i.&nbsp;e.&nbsp;if they only produce strange characters on your screen), then gnuplot has not been set up correctly. Contact your system administrator; this is a serious flaw that will greatly hinder your productivity.
	  </p>

	  <H2><A NAME="SECTION52">

	      4.2 Basic "<tt><font size=2>set</font></tt>" options</A>
	  </H2>

	  <P>
	    Gnuplot has many options that can be set using the "<tt><font size=2>set</font></tt>" command:
	  </p>

	  <UL>

	    <LI>You can add a coordinate grid to you plots with "<tt><font size=2>set grid</font></tt>".  You have to enable the grid before you execute the plot command. You switch off the grid with "<tt><font size=2>set nogrid</font></tt>". Most options have a corresponding "<tt><font size=2>no</font></tt>"-options.
	    </LI>
	    <LI>You can add a title with "<tt><font size=2>set title
	    TITLE</font></tt>". Your title TITLE has to be enclosed in double quotes. See also "<tt><font size=2>help set title</font></tt>".
	    </LI>
	    <LI>You can permanently set the x and y ranges with "<tt><font size=2>set xrange [min:max]</font></tt>" and "<tt><font size=2>set yrange  [min:max]</font></tt>". You get rid of these ranges with "<tt><font size=2>set autoscale x</font></tt>" and "<tt><font size=2>set autoscale y</font></tt>".
	    </LI>

	  </UL>

	  <H2><A NAME="SECTION53">
	      4.3 Combining several graphs</A>
	  </H2>

	  <P>
	    Sometimes you want to plot several graphs on top of each other. In order to do that, you use a single plot command and separate the plot options by commas, as in
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 0 with lines, &#34;phi.xl&#34;
	      index 10 with lines</TT>
	  </BLOCKQUOTE>

	  <p>
	    Notice that you get different colours that way. You can specify which colours to use by adding a number after the plotting style, as in "<tt><font size=2>with points 4</font></tt>", "<tt><font size=2>with lines 7</font></tt>", "<tt><font size=2>with dots 8</font></tt>".  You can get a test page listing all colours by giving the "<tt><font size=2>test</font></tt>" command.
	  </p>

	  <P>
	    If you want different labels for the different graphs that you combine, say
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 0 title &#34;initial&#34; with lines, &#34;phi.xl&#34; index 60 title &#34;final&#34; with lines</TT>

	  </BLOCKQUOTE>
	  <p>
	    (on a single line, of course). Again the order of "index", "title", and "with" cannot be changed.
	  </p>

	  <H2><A NAME="SECTION54">
	      4.4. Saving the output / Printing</A>
	  </H2>

	  <P>
	    After that much work you will likely want to print your work. Gnuplot can output in many different formats; your screen is only one of them. To produce postscript output and write that into a file, you would first come up with the corresponding "<tt><font size=2>plot</font></tt>" command. Then you say
	    </p>

	  <OL>
	    <LI><tt><font size=2>set output &#34;phi.ps&#34;</font></tt>

	    </LI>
	    <LI><tt><font size=2>set terminal postscript color</font></tt> [notice the American spelling of "color" here]
	    </LI>
	    <LI><tt><font size=2>plot ...</font></tt> [using your cursor keys to repeat a previous command, of course]
	    </LI>
	    <LI><tt><font size=2>set output</font></tt> [finish writing into the file]
	    </LI>

	    <LI><tt><font size=2>set terminal x11</font></tt> [plot to the screen again]
	    </LI>
	  </OL>
	  <p>
	    You can plot several graphs into the same file by giving several "<tt><font size=2>plot</font></tt>" commands. They will be placed onto different pages.
	  </p>
	  <P>
	    Colours and line styles might come out differently on the screen and on paper.  You might want to output a test page (say "<tt><font size=2>test</font></tt>" instead of "<tt><font size=2>plot ...</font></tt>" in the above). In order to produce black-and-white graphs, leave out the "<tt><font size=2>color</font></tt>" option in the "<tt><font size=2>set terminal postscript</font></tt>" specification.
	  </p>

	  <H1><A NAME="SECTION6">
	      5. Plotting 2D output files</A>
	  </H1>

	  <P>
	    Cactus can not only output 1D ASCII files, but also 2D files. These files contain a whole plane of data. You enable this kind of output by setting the corresponding "2D" parameters in your Cactus parameter file. For example, you could add the lines
	  </p>

	  <P>

	  <BLOCKQUOTE>
	    <TT>IOASCII::out2D_every = 2</TT>
	  </BLOCKQUOTE>
	  <P>
	  <BLOCKQUOTE><TT>IOASCII::out2D_vars = &#34;wavetoy::phi&#34;</TT>
	  </BLOCKQUOTE>
	  <p>

	    to the WaveToy parameter file from above that you used to create the 1D output.
	  </p>
	  <P>
	    The basic gnuplot command for 2D-plots (aka surface plots) is "<tt><font size=2>splot</font></tt>".  Thus
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>splot &#34;phi_2d_xy.gnuplot&#34; index 0 with lines</TT>

	  </BLOCKQUOTE>
	</p>

	  <p>
	    works as expected. "<tt><font size=2>splot</font></tt>" accepts the same "<tt><font size=2>index</font></tt>", "<tt><font size=2>with</font></tt>", and "<tt><font size=2>title</font></tt>" options as "<tt><font size=2>plot</font></tt>".  Do not forget about "<tt><font size=2>help splot</font></tt>". [Old versions of gnuplot might need a "<tt><font size=2>set parametric</font></tt>" before they can plot surfaces.  Install a current version if that happens to you.]
	  </p>

	  <P>
	    You can remove the hidden lines, i.&nbsp;e.&nbsp;make the surface non-transparent, with the option "<tt><font size=2>set hidden3d</font></tt>". After setting that option you have to replot the graph.
	  </p>

	  <P>
	    For surface plots there are three ranges that you can specify, namely x, y, and z. So
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>splot [6:][6:] &#34;phi_2d_xy.gnuplot&#34; index 60 with lines</TT>
	  </BLOCKQUOTE>
	  <p>
	    selects the outermost corner for displaying, while
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>splot [6:][6:][-0.1:+0.1] &#34;phi_2d_xy.gnuplot&#34; index 60 with lines</TT>
	  </BLOCKQUOTE>
	  <p>
	    also chooses a different (much coarser) scale on the z axis.
	  </p>

	  <P>
	    You can add contour lines to your graph with "<tt><font size=2>set contour</font></tt>".  As "<tt><font size=2>help set contour</font></tt>" tells you, you can draw the contour lines onto the x-y plane  ("<tt><font size=2>set contour base</font></tt>"), onto the graph ("<tt><font size=2>set contour surface</font></tt>"), or both ("<tt><font size=2>set contour both</font></tt>"). You can even switch off the surface ("<tt><font size=2>set nosurface</font></tt>") and display the contour lines alone.
	  </p>

	  <P>
	    You get back to normal with "<tt><font size=2>set nocontour</font></tt>" and "<tt><font size=2>set surface</font></tt>".
	  </p>

	  <P>
	    You can rotate the graph with "<tt><font size=2>set view</font></tt>". See "<tt><font size=2>help set view</font></tt>" for details.
	  </p>

	  <H1><A NAME="SECTION7">
	      6 Getting professional</A>
	  </H1>

	  <P>
	    Many people love their keyboards so much that they are hesitant to type more characters than absolutely
 necessary. Fortunately for them, most gnuplot commands can be abbreviated. Instead of the cumbersome
	  </p>

	  <P>

	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 0 title &#34;initial&#34; with lines, &#34;phi.xl&#34; index 60 title &#34;final&#34; with lines</TT>

	  </BLOCKQUOTE>
	  <p>
	    from above, you can also write
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>p &#34;phi.xl&#34; i 0 t &#34;initial&#34; w l, &#34;&#34; i 60 t &#34;final&#34; w l</TT>

	  </BLOCKQUOTE>
	  <p>
	    Most commands and options are abbreviated by their first or first few characters.  An empty file name repeats the previous file name. "<tt><font size=2>linespoints</font></tt>", by the way, is abbreviated "<tt><font size=2>lp</font></tt>".
	  </p>

	  <P>
	    If you want to create gnuplot scripts, then you can put these commands into a file and then execute that file with "<tt><font size=2>load FILENAME</font></tt>". Your FILENAME has to be put in double quotes. Your file can contain empty lines, and comments introduced by the hash ("<tt><font size=2>#</font></tt>") character.
	  </p>

	  <P>
	    You can also save your current gnuplot state (including all the "<tt><font size=2>set</font></tt>" options currently in effect) with the "<tt><font size=2>save FILENAME</font></tt>" command.  You can then load this state again with "<tt><font size=2>load FILENAME</font></tt>".
	  </p>

	  <H1><A NAME="SECTION8">
	      7. Some advanced options</A>
	  </H1>

	  <H2><A NAME="SECTION81">
	      7.1 Downsampling</A>
	  </H2>

	  <P>
	    If you have high resolution data, you might want to plot only every n-th data point:
	  </p>

	  <p>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 0 every 2 with linespoints</TT>
	  </BLOCKQUOTE>
	  <P>
	  <BLOCKQUOTE><TT>splot &#34;phi_2d_xy.gnuplot&#34; index 0 every 2:2 with lines</TT>

	  </BLOCKQUOTE>
	  <p>
	    The "<tt><font size=2>every 2</font></tt>" and "<tt><font size=2>every 2:2</font></tt>" display only every second grid point.
	  </p>

	  <H2><A NAME="SECTION82">
	      7.2 Rescaling</A>
	  </H2>

	  <P>
	    You can rescale or shift the data:
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;phi.xl&#34; index 0 using 1:($2*2) with linespoints</TT>

	  </BLOCKQUOTE>
	  <p>
	    The expression "<tt><font size=2>($2*2)</font></tt>" multiplies all values in the second column ("<tt><font size=2>$2</font></tt>") with 2 before it is displayed. You can put arbitrary expressions in a C-like syntax here, such as "<tt><font size=2>(sqrt($2*$2))</font></tt>" for the absolute value, or "<tt><font size=2>(2*pi*$2)</font></tt>" to multiply by 2 pi, or add a sine wave as in "<tt><font size=2>($2+sin($1))</font></tt>". You can also modify the x coordinate. The whole formula has to be put in parentheses.
	  </p>

	  <P>
	    An expression that is sometimes useful is "<tt><font size=2>(test ? value : 0/0)</font></tt>".  It displays the value only if "<tt><font size=2>test</font></tt>" is true. Otherwise the value is omitted from the graph.
	  </p>

	  <H2><A NAME="SECTION83">
	      7.3. Scripting</A>
	  </H2>

	  <P>
	    You can not only display files, but arbitrary output produced by other programmes.  This is especially helpful to preprocess data files through scripts, e.&nbsp;g.&nbsp;using paste, awk, or perl. For reasons of space I will not describe using awk or perl here.
	  </p>

	  <P>
	    Assume that you want to plot the difference between the global minimum and maximum versus time (for whatever reason). You can easily plot the minimum and maximum themselves with
	  </p>

	  <P>

	  <BLOCKQUOTE>
	    <TT>plot &#34;phi_min.tl&#34; with lines, &#34;phi_max.tl&#34; with lines</TT>

	  </BLOCKQUOTE>
	  <p>

	    but combining values from different files into a single curve requires some magic: The line
	  </p>

	  <P>
	  <BLOCKQUOTE>
	    <TT>plot &#34;&lt; paste phi_min.tl phi_max.tl&#34; using 1:($4-$2) with lines</TT>
	  </BLOCKQUOTE>

	  <p>
	    plots the desired difference. Gnuplot treats a filename that starts&#92; with "<tt><font size=2>&lt;</font></tt>" not as a regular file, but as a command that is executed.  The output of that command is then plotted.
	  </p>

	  <P>
	    The Unix command "<tt><font size=2>paste</font></tt>" takes its input files and concatenates their individual lines. The input files "<tt><font size=2>phi_min.tl</font></tt>" and "<tt><font size=2>phi_max.tl</font></tt>" have two columns each, thus the output of the paste command has four columns.  The "<tt><font size=2>using</font></tt>" option plots the first column (the time) versus the difference of the fourth and second column, i.&nbsp;e.&nbsp;the difference between the maximum and minimum. (The third column contains again the time.) See "<tt><font size=2>man paste</font></tt>" in Unix and "<tt><font size=2>help plot special-filenames</font></tt>" and "<tt><font size=2>help plot using</font></tt>" in gnuplot.
	  </p>

	  <H1><A NAME="SECTION9">
	      8. 3D plots of time evolutions</A>
	  </H1>

	  <P>
	    It is often convenient to produce a 3D plot that shows how e.&nbsp;g.&nbsp;"<tt><font size=2>phi.xl</font></tt>" evolves in time. A naive
	  </p>

	  <BLOCKQUOTE>
	    <TT>splot &#34;phi.xl&#34; using 2 with lines</TT>
	  </BLOCKQUOTE>
	  <p>
	    doesn't work -- all curves sit on top of each other instead of next to each other. An unhappy coincidence means that the gnuplot files produced by Cactus contain too many empty lines for that; it is necessary to remove every second empty line. This can be achieved with an awk script, as in
	  </p>
	  <P>

	  <BLOCKQUOTE>
	    <TT>splot &#34;&lt; awk '{ if (NF==0) ++el; else el=0; if (el&lt;2) print; }' phi.xl&#34; using 2 with lines</TT>
	  </BLOCKQUOTE>
	  <p>
	    In the above command (which has to be on a single line) be sure to get the quotes and apostrophes correct.
	  </p>

	  <H1><A NAME="SECTION10">
	      9. Closing remarks</A>
	  </H1>

	  <P>
	    Gnuplot scales well. I have successfully used gnuplot with data files several hundred Megabytes large, on machines with much less main memory. I never had gnuplot crash on me.
	  </p>

	  <P>

	    Gnuplot is actively maintained and available on many platforms. The current beta versions allow mouse interactions with the graph, for example rotating a 3D image.
	  </p>

	  <P>
	    Gnuplot (together with the various scripting languages) is a very powerful tool.  You can produce reasonable graphs with just a few commands, but there are many more than shown here in this introduction. The ability to write programmes and execute them later makes it easy to repeat previous work, should, hypothetically, any data files change just hours prior to a deadline. It also makes it less tedious to produce many similar graphs.
	  </p>

	</td>
      </tr>
    </table>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
