---
layout: default
title: gnuPlot
---
<table>
<colgroup>
<col style="width: 100%" />
</colgroup>
<tbody>
<tr class="odd">
<td><h3 id="gnuplot---powerful-visualization-tool-for-1d-and-2d-data">Gnuplot - Powerful Visualization Tool for 1D and 2D Data</h3>
<p><a href="gnuPlot1.gif"><img src="gnuPlot1.gif" alt="Gnuplot Image" width="300" height="150" /></a> Gnuplot is a command-driven interactive function plotting program. It can plot functions and data points in both two- and three-dimensional plots in various formats (points, lines, surfaces, contours). A set of built-in terminal drivers support many different graphics devices, eg. for plotting to different types of terminals or for generating GIF, postscript, latex files.</p>
<p>Gnuplot is free software. It is available on a variety of platforms and architectures.</p>
<p>The gnuplot home page <a href="http://www.gnuplot.info">www.gnuplot.info</a> provides the latest official release, along with documentation, a FAQ list, and links to more information. Gnuplot development is managed by SourceForge. The latest development source code version can be checked out on the <a href="http://sourceforge.net/projects/gnuplot/">SourceForge CVS page for gnuplot</a>. The SourceForge ftp server also contains <a href="ftp://gnuplot.sourceforge.net/pub/gnuplot/">development tarballs with source code and binaries</a> of the most recent stable gnuplot version.<br />
Since in many software distributions only an older version of gnuplot is included, we provide <a href="http://jean-luc.aei.mpg.de/Codes/gnuplot/">statically linked Linux executables of gnuplot 4.0.0</a> (with mouse support for rotating/scaling/zooming and pm3d support for drawing color/gray maps and surfaces).</p>
<h3 id="using-gnuplot-with-cactus">Using gnuplot with Cactus</h3>
<p><strong>Erik Schnetter</strong></p>
<p><strong>June 17, 2001</strong></p>
<h3 id="abstract">Abstract:</h3>
<p>At the time of this writing, there are two supported client programmes available to display Cactus ASCII output graphically, namely <a href="../xGraph"><em>xgraph</em></a> and <em>gnuplot</em>. Although xgraph is the default output format, gnuplot offers many more features to the intermediate and expert user. Among those are the capability to choose which part(s) of the dataset to display, or to combine with other data. Below you find an introduction to creating and viewing Cactus ASCII output files in the gnuplot format. Step by step you are then introduced to more advanced features of gnuplot.</p>
<br />

<h2 id="contents"><span id="SECTION1">Contents</span></h2>
<ul>
<li><a href="gnuPlot" id="tex2html19">Contents</a></li>
<li><a href="gnuPlot#SECTION2" id="tex2html20">1. Choosing gnuplot output in Cactus</a></li>
<li><a href="gnuPlot#SECTION3" id="tex2html21">2. Producing some example files</a></li>
<li><a href="gnuPlot#SECTION4" id="tex2html22">3. First steps</a></li>
<li><a href="gnuPlot#SECTION5" id="tex2html23">4. Brushing up the graphs</a>
<ul>
<li><a href="gnuPlot#SECTION51" id="tex2html24">4.1. Comfortable input</a></li>
<li><a href="gnuPlot#SECTION52" id="tex2html25">4.2. Basic "<code>set</code>" options</a></li>
<li><a href="gnuPlot#SECTION53" id="tex2html26">4.3. Combining several graphs</a></li>
<li><a href="gnuPlot#SECTION54" id="tex2html27">4.4. Saving the output / Printing</a></li>
</ul></li>
<li><a href="gnuPlot#SECTION6" id="tex2html28">5. Plotting 2D output files</a></li>
<li><a href="gnuPlot#SECTION7" id="tex2html29">6. Getting professional</a></li>
<li><a href="gnuPlot#SECTION8%22" id="tex2html30">7. Some advanced options</a>
<ul>
<li><a href="gnuPlot#SECTION81" id="tex2html31">7.1. Downsampling</a></li>
<li><a href="gnuPlot#SECTION82" id="tex2html32">7.2. Rescaling</a></li>
<li><a href="gnuPlot#SECTION83" id="tex2html33">7.3. Scripting</a></li>
</ul></li>
<li><a href="gnuPlot#SECTION9" id="tex2html34">8. 3D plots of time evolutions</a></li>
<li><a href="gnuPlot#SECTION10" id="tex2html35">9. Closing remarks</a></li>
</ul>
<h1 id="choosing-gnuplot-output-in-cactus"><span id="SECTION2">1. Choosing gnuplot output in Cactus</span></h1>
<p>By default, the thorns IOBasic and IOASCII produce xgraph output. You have to set the parameters</p>
<blockquote>
<code>IOBasic::outScalar_style = "gnuplot"</code>
</blockquote>
<blockquote>
<code>IOASCII::out1D_style = "gnuplot f(x)"</code>
</blockquote>
<p>to get gnuplot output. The basic file contents will be the same, but the file will have a slightly different structure.</p>
<h1 id="producing-some-example-files"><span id="SECTION3">2. Producing some example files</span></h1>
<p>By default, 1D ASCII output from the released Cactus thorns uses xgraph format, and most of the example parameter files distributed with thorns follow this convention. The parameter file <em>wavetoyc_gnuplot.par</em> in thorn <strong>WaveToyC</strong> in the <strong>CactusWave</strong> arrangement produces gnuplot output, demonstrating all released output methods which can produce gnuplot output. To test this out:</p>
<ol>
<li>Create an application <code>wavetoy</code> consisting of the standard WaveToy example</li>
<li>Type <code>make wavetoy-examples</code> to get some sample parameter files in the directory <code>examples/wavetoy</code></li>
<li>Run the parameter file <em>wavetoyc_gnuplot.par</em></li>
</ol>
<p>You should now have an output file called <code>phi.xl</code>. If you look into this file, you should see some hash characters (<code>#</code>) and no lonely double quotes. Hash characters are used in gnuplot files, while lonely double quotes are used in xgraph files.</p>
<h1 id="first-steps"><span id="SECTION4">3. First steps</span></h1>
<p>If gnuplot is not already installed on your machine, either ask your system administrator to install it, or follow the download/installation instructions below. The current version of gnuplot is about 3.7. (Earlier versions might not support all of the commands mentioned below.) You start gnuplot by typing <code>gnuplot</code> in a terminal. You will see a long banner of about 20 lines, and then the prompt <code>gnuplot&gt;</code>. Gnuplot is terminal-driven -- that means that you have to type your commands.</p>
<p>While in gnuplot you can change directories using the <code>cd</code> command much like you do in your shell. The difference is that the directory name has to be enclosed in double quotes. So, if you are not already in the directory containing the output files, go there now.</p>
<p>The basic gnuplot command is <code>plot</code>. You can plot functions (<code>plot sin(x)</code>) and files. To plot phi vs. x, you'd say</p>
<blockquote>
<code>plot "phi.xl" with lines</code>
</blockquote>
<p>You will see phi plotted vs. x. Each curve is for one time step. In order to choose a particular time only, you say</p>
<blockquote>
<code>plot "phi.xl" index 10 with points</code>
</blockquote>
<p>where "<code>index 10</code>" selects the 10th output (numbering starts from zero). The general form of the "<code>index</code>" option is "<code>index  FROM:TO:STRIDE</code>", so that the command</p>
<blockquote>
<code>plot "phi.xl" index 10:20:5 with linespoints</code>
</blockquote>
<p>plots the 10th, 15th, and 20th output with connected points. Note that you cannot change the relative order of the "<code>index</code>" and "<code>with</code>" options; the <code>index</code> option has to come before <code>with</code>.</p>
<p>You can zoom in by specifying ranges in the x and y direction, as with</p>
<blockquote>
<code>plot [0:2][-0.25:] "phi.xl" index 10:20:5 with linespoints</code>
</blockquote>
which chooses the range [0:2] for the x axis and [-0.25:YMAX] for the y axis. ymax is automatically determined through the data you plot.
<p>You get help with "<code>help</code>", especially with "<code>help plot</code>".</p>
<p>You quit gnuplot with "<code>quit</code>".</p>
<h1 id="brushing-up-the-graphs"><span id="SECTION5">4. Brushing up the graphs</span></h1>
<h2 id="comfortable-input"><span id="SECTION51">4.1 Comfortable input</span></h2>
<p>You noticed likely that, once you typed a command, the next command is often very similar. Instead of retyping the whole command, you can use the cursor keys to get to what you typed previously and edit that command. This is in general much faster. If your cursor keys don't work (i. e. if they only produce strange characters on your screen), then gnuplot has not been set up correctly. Contact your system administrator; this is a serious flaw that will greatly hinder your productivity.</p>
<h2 id="basic-set-options"><span id="SECTION52">4.2 Basic "<code>set</code>" options</span></h2>
<p>Gnuplot has many options that can be set using the "<code>set</code>" command:</p>
<ul>
<li>You can add a coordinate grid to you plots with "<code>set grid</code>". You have to enable the grid before you execute the plot command. You switch off the grid with "<code>set nogrid</code>". Most options have a corresponding "<code>no</code>"-options.</li>
<li>You can add a title with "<code>set title         TITLE</code>". Your title TITLE has to be enclosed in double quotes. See also "<code>help set title</code>".</li>
<li>You can permanently set the x and y ranges with "<code>set xrange [min:max]</code>" and "<code>set yrange  [min:max]</code>". You get rid of these ranges with "<code>set autoscale x</code>" and "<code>set autoscale y</code>".</li>
</ul>
<h2 id="combining-several-graphs"><span id="SECTION53">4.3 Combining several graphs</span></h2>
<p>Sometimes you want to plot several graphs on top of each other. In order to do that, you use a single plot command and separate the plot options by commas, as in</p>
<blockquote>
<code>plot "phi.xl" index 0 with lines, "phi.xl"           index 10 with lines</code>
</blockquote>
<p>Notice that you get different colours that way. You can specify which colours to use by adding a number after the plotting style, as in "<code>with points 4</code>", "<code>with lines 7</code>", "<code>with dots 8</code>". You can get a test page listing all colours by giving the "<code>test</code>" command.</p>
<p>If you want different labels for the different graphs that you combine, say</p>
<blockquote>
<code>plot "phi.xl" index 0 title "initial" with lines, "phi.xl" index 60 title "final" with lines</code>
</blockquote>
<p>(on a single line, of course). Again the order of "index", "title", and "with" cannot be changed.</p>
<h2 id="saving-the-output-printing"><span id="SECTION54">4.4. Saving the output / Printing</span></h2>
<p>After that much work you will likely want to print your work. Gnuplot can output in many different formats; your screen is only one of them. To produce postscript output and write that into a file, you would first come up with the corresponding "<code>plot</code>" command. Then you say</p>
<ol>
<li><code>set output "phi.ps"</code></li>
<li><code>set terminal postscript color</code> [notice the American spelling of "color" here]</li>
<li><code>plot ...</code> [using your cursor keys to repeat a previous command, of course]</li>
<li><code>set output</code> [finish writing into the file]</li>
<li><code>set terminal x11</code> [plot to the screen again]</li>
</ol>
<p>You can plot several graphs into the same file by giving several "<code>plot</code>" commands. They will be placed onto different pages.</p>
<p>Colours and line styles might come out differently on the screen and on paper. You might want to output a test page (say "<code>test</code>" instead of "<code>plot ...</code>" in the above). In order to produce black-and-white graphs, leave out the "<code>color</code>" option in the "<code>set terminal postscript</code>" specification.</p>
<h1 id="plotting-2d-output-files"><span id="SECTION6">5. Plotting 2D output files</span></h1>
<p>Cactus can not only output 1D ASCII files, but also 2D files. These files contain a whole plane of data. You enable this kind of output by setting the corresponding "2D" parameters in your Cactus parameter file. For example, you could add the lines</p>
<blockquote>
<code>IOASCII::out2D_every = 2</code>
</blockquote>
<blockquote>
<code>IOASCII::out2D_vars = "wavetoy::phi"</code>
</blockquote>
<p>to the WaveToy parameter file from above that you used to create the 1D output.</p>
<p>The basic gnuplot command for 2D-plots (aka surface plots) is "<code>splot</code>". Thus</p>
<blockquote>
<code>splot "phi_2d_xy.gnuplot" index 0 with lines</code>
</blockquote>
<p>works as expected. "<code>splot</code>" accepts the same "<code>index</code>", "<code>with</code>", and "<code>title</code>" options as "<code>plot</code>". Do not forget about "<code>help splot</code>". [Old versions of gnuplot might need a "<code>set parametric</code>" before they can plot surfaces. Install a current version if that happens to you.]</p>
<p>You can remove the hidden lines, i. e. make the surface non-transparent, with the option "<code>set hidden3d</code>". After setting that option you have to replot the graph.</p>
<p>For surface plots there are three ranges that you can specify, namely x, y, and z. So</p>
<blockquote>
<code>splot [6:][6:] "phi_2d_xy.gnuplot" index 60 with lines</code>
</blockquote>
<p>selects the outermost corner for displaying, while</p>
<blockquote>
<code>splot [6:][6:][-0.1:+0.1] "phi_2d_xy.gnuplot" index 60 with lines</code>
</blockquote>
<p>also chooses a different (much coarser) scale on the z axis.</p>
<p>You can add contour lines to your graph with "<code>set contour</code>". As "<code>help set contour</code>" tells you, you can draw the contour lines onto the x-y plane ("<code>set contour base</code>"), onto the graph ("<code>set contour surface</code>"), or both ("<code>set contour both</code>"). You can even switch off the surface ("<code>set nosurface</code>") and display the contour lines alone.</p>
<p>You get back to normal with "<code>set nocontour</code>" and "<code>set surface</code>".</p>
<p>You can rotate the graph with "<code>set view</code>". See "<code>help set view</code>" for details.</p>
<h1 id="getting-professional"><span id="SECTION7">6 Getting professional</span></h1>
<p>Many people love their keyboards so much that they are hesitant to type more characters than absolutely necessary. Fortunately for them, most gnuplot commands can be abbreviated. Instead of the cumbersome</p>
<blockquote>
<code>plot "phi.xl" index 0 title "initial" with lines, "phi.xl" index 60 title "final" with lines</code>
</blockquote>
<p>from above, you can also write</p>
<blockquote>
<code>p "phi.xl" i 0 t "initial" w l, "" i 60 t "final" w l</code>
</blockquote>
<p>Most commands and options are abbreviated by their first or first few characters. An empty file name repeats the previous file name. "<code>linespoints</code>", by the way, is abbreviated "<code>lp</code>".</p>
<p>If you want to create gnuplot scripts, then you can put these commands into a file and then execute that file with "<code>load FILENAME</code>". Your FILENAME has to be put in double quotes. Your file can contain empty lines, and comments introduced by the hash ("<code>#</code>") character.</p>
<p>You can also save your current gnuplot state (including all the "<code>set</code>" options currently in effect) with the "<code>save FILENAME</code>" command. You can then load this state again with "<code>load FILENAME</code>".</p>
<h1 id="some-advanced-options"><span id="SECTION8">7. Some advanced options</span></h1>
<h2 id="downsampling"><span id="SECTION81">7.1 Downsampling</span></h2>
<p>If you have high resolution data, you might want to plot only every n-th data point:</p>
<blockquote>
<code>plot "phi.xl" index 0 every 2 with linespoints</code>
</blockquote>
<blockquote>
<code>splot "phi_2d_xy.gnuplot" index 0 every 2:2 with lines</code>
</blockquote>
<p>The "<code>every 2</code>" and "<code>every 2:2</code>" display only every second grid point.</p>
<h2 id="rescaling"><span id="SECTION82">7.2 Rescaling</span></h2>
<p>You can rescale or shift the data:</p>
<blockquote>
<code>plot "phi.xl" index 0 using 1:($2*2) with linespoints</code>
</blockquote>
<p>The expression "<code>($2*2)</code>" multiplies all values in the second column ("<code>$2</code>") with 2 before it is displayed. You can put arbitrary expressions in a C-like syntax here, such as "<code>(sqrt($2*$2))</code>" for the absolute value, or "<code>(2*pi*$2)</code>" to multiply by 2 pi, or add a sine wave as in "<code>($2+sin($1))</code>". You can also modify the x coordinate. The whole formula has to be put in parentheses.</p>
<p>An expression that is sometimes useful is "<code>(test ? value : 0/0)</code>". It displays the value only if "<code>test</code>" is true. Otherwise the value is omitted from the graph.</p>
<h2 id="scripting"><span id="SECTION83">7.3. Scripting</span></h2>
<p>You can not only display files, but arbitrary output produced by other programmes. This is especially helpful to preprocess data files through scripts, e. g. using paste, awk, or perl. For reasons of space I will not describe using awk or perl here.</p>
<p>Assume that you want to plot the difference between the global minimum and maximum versus time (for whatever reason). You can easily plot the minimum and maximum themselves with</p>
<blockquote>
<code>plot "phi_min.tl" with lines, "phi_max.tl" with lines</code>
</blockquote>
<p>but combining values from different files into a single curve requires some magic: The line</p>
<blockquote>
<code>plot "&lt; paste phi_min.tl phi_max.tl" using 1:($4-$2) with lines</code>
</blockquote>
<p>plots the desired difference. Gnuplot treats a filename that starts\ with "<code>&lt;</code>" not as a regular file, but as a command that is executed. The output of that command is then plotted.</p>
<p>The Unix command "<code>paste</code>" takes its input files and concatenates their individual lines. The input files "<code>phi_min.tl</code>" and "<code>phi_max.tl</code>" have two columns each, thus the output of the paste command has four columns. The "<code>using</code>" option plots the first column (the time) versus the difference of the fourth and second column, i. e. the difference between the maximum and minimum. (The third column contains again the time.) See "<code>man paste</code>" in Unix and "<code>help plot special-filenames</code>" and "<code>help plot using</code>" in gnuplot.</p>
<h1 id="d-plots-of-time-evolutions"><span id="SECTION9">8. 3D plots of time evolutions</span></h1>
<p>It is often convenient to produce a 3D plot that shows how e. g. "<code>phi.xl</code>" evolves in time. A naive</p>
<blockquote>
<code>splot "phi.xl" using 2 with lines</code>
</blockquote>
<p>doesn't work -- all curves sit on top of each other instead of next to each other. An unhappy coincidence means that the gnuplot files produced by Cactus contain too many empty lines for that; it is necessary to remove every second empty line. This can be achieved with an awk script, as in</p>
<blockquote>
<code>splot "&lt; awk '{ if (NF==0) ++el; else el=0; if (el&lt;2) print; }' phi.xl" using 2 with lines</code>
</blockquote>
<p>In the above command (which has to be on a single line) be sure to get the quotes and apostrophes correct.</p>
<h1 id="closing-remarks"><span id="SECTION10">9. Closing remarks</span></h1>
<p>Gnuplot scales well. I have successfully used gnuplot with data files several hundred Megabytes large, on machines with much less main memory. I never had gnuplot crash on me.</p>
<p>Gnuplot is actively maintained and available on many platforms. The current beta versions allow mouse interactions with the graph, for example rotating a 3D image.</p>
<p>Gnuplot (together with the various scripting languages) is a very powerful tool. You can produce reasonable graphs with just a few commands, but there are many more than shown here in this introduction. The ability to write programmes and execute them later makes it easy to repeat previous work, should, hypothetically, any data files change just hours prior to a deadline. It also makes it less tedious to produce many similar graphs.</p></td>
</tr>
</tbody>
</table>
