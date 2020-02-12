---
layout: default
title: gnuPlot
---
+-----------------------------------------------------------------------+
| ### Gnuplot - Powerful Visualization Tool for 1D and 2D Data          |
|                                                                       |
| [![Gnuplot Image](gnuPlot1.gif){width="300"                           |
| height="150"}](gnuPlot1.gif) Gnuplot is a command-driven interactive  |
| function plotting program. It can plot functions and data points in   |
| both two- and three-dimensional plots in various formats (points,     |
| lines, surfaces, contours). A set of built-in terminal drivers        |
| support many different graphics devices, eg. for plotting to          |
| different types of terminals or for generating GIF, postscript, latex |
| files.                                                                |
|                                                                       |
| Gnuplot is free software. It is available on a variety of platforms   |
| and architectures.                                                    |
|                                                                       |
| The gnuplot home page [www.gnuplot.info](http://www.gnuplot.info)     |
| provides the latest official release, along with documentation, a FAQ |
| list, and links to more information. Gnuplot development is managed   |
| by SourceForge. The latest development source code version can be     |
| checked out on the [SourceForge CVS page for                          |
| gnuplot](http://sourceforge.net/projects/gnuplot/). The SourceForge   |
| ftp server also contains [development tarballs with source code and   |
| binaries](ftp://gnuplot.sourceforge.net/pub/gnuplot/) of the most     |
| recent stable gnuplot version.\                                       |
| Since in many software distributions only an older version of gnuplot |
| is included, we provide [statically linked Linux executables of       |
| gnuplot 4.0.0](http://jean-luc.aei.mpg.de/Codes/gnuplot/) (with mouse |
| support for rotating/scaling/zooming and pm3d support for drawing     |
| color/gray maps and surfaces).                                        |
|                                                                       |
| ### Using gnuplot with Cactus                                         |
|                                                                       |
| **Erik Schnetter**                                                    |
|                                                                       |
| **June 17, 2001**                                                     |
|                                                                       |
| ### Abstract:                                                         |
|                                                                       |
| At the time of this writing, there are two supported client           |
| programmes available to display Cactus ASCII output graphically,      |
| namely [*xgraph*](../xGraph) and *gnuplot*. Although xgraph is the    |
| default output format, gnuplot offers many more features to the       |
| intermediate and expert user. Among those are the capability to       |
| choose which part(s) of the dataset to display, or to combine with    |
| other data. Below you find an introduction to creating and viewing    |
| Cactus ASCII output files in the gnuplot format. Step by step you are |
| then introduced to more advanced features of gnuplot.                 |
|                                                                       |
| \                                                                     |
|                                                                       |
| [Contents]{#SECTION1}                                                 |
| ---------------------                                                 |
|                                                                       |
| -   [Contents](gnuPlot){#tex2html19}                                  |
| -   [1. Choosing gnuplot output in                                    |
|     Cactus](gnuPlot#SECTION2){#tex2html20}                            |
| -   [2. Producing some example files](gnuPlot#SECTION3){#tex2html21}  |
| -   [3. First steps](gnuPlot#SECTION4){#tex2html22}                   |
| -   [4. Brushing up the graphs](gnuPlot#SECTION5){#tex2html23}        |
|     -   [4.1. Comfortable input](gnuPlot#SECTION51){#tex2html24}      |
|     -   [4.2. Basic \"`set`\"                                         |
|         options](gnuPlot#SECTION52){#tex2html25}                      |
|     -   [4.3. Combining several                                       |
|         graphs](gnuPlot#SECTION53){#tex2html26}                       |
|     -   [4.4. Saving the output /                                     |
|         Printing](gnuPlot#SECTION54){#tex2html27}                     |
| -   [5. Plotting 2D output files](gnuPlot#SECTION6){#tex2html28}      |
| -   [6. Getting professional](gnuPlot#SECTION7){#tex2html29}          |
| -   [7. Some advanced options](gnuPlot#SECTION8%22){#tex2html30}      |
|     -   [7.1. Downsampling](gnuPlot#SECTION81){#tex2html31}           |
|     -   [7.2. Rescaling](gnuPlot#SECTION82){#tex2html32}              |
|     -   [7.3. Scripting](gnuPlot#SECTION83){#tex2html33}              |
| -   [8. 3D plots of time evolutions](gnuPlot#SECTION9){#tex2html34}   |
| -   [9. Closing remarks](gnuPlot#SECTION10){#tex2html35}              |
|                                                                       |
| [1. Choosing gnuplot output in Cactus]{#SECTION2}                     |
| =================================================                     |
|                                                                       |
| By default, the thorns IOBasic and IOASCII produce xgraph output. You |
| have to set the parameters                                            |
|                                                                       |
| > `IOBasic::outScalar_style = "gnuplot"`                              |
|                                                                       |
| > `IOASCII::out1D_style = "gnuplot f(x)"`                             |
|                                                                       |
| to get gnuplot output. The basic file contents will be the same, but  |
| the file will have a slightly different structure.                    |
|                                                                       |
| [2. Producing some example files]{#SECTION3}                          |
| ============================================                          |
|                                                                       |
| By default, 1D ASCII output from the released Cactus thorns uses      |
| xgraph format, and most of the example parameter files distributed    |
| with thorns follow this convention. The parameter file                |
| *wavetoyc\_gnuplot.par* in thorn **WaveToyC** in the **CactusWave**   |
| arrangement produces gnuplot output, demonstrating all released       |
| output methods which can produce gnuplot output. To test this out:    |
|                                                                       |
| 1.  Create an application `wavetoy` consisting of the standard        |
|     WaveToy example                                                   |
| 2.  Type `make wavetoy-examples` to get some sample parameter files   |
|     in the directory `examples/wavetoy`                               |
| 3.  Run the parameter file *wavetoyc\_gnuplot.par*                    |
|                                                                       |
| You should now have an output file called `phi.xl`. If you look into  |
| this file, you should see some hash characters (`#`) and no lonely    |
| double quotes. Hash characters are used in gnuplot files, while       |
| lonely double quotes are used in xgraph files.                        |
|                                                                       |
| [3. First steps]{#SECTION4}                                           |
| ===========================                                           |
|                                                                       |
| If gnuplot is not already installed on your machine, either ask your  |
| system administrator to install it, or follow the                     |
| download/installation instructions below. The current version of      |
| gnuplot is about 3.7. (Earlier versions might not support all of the  |
| commands mentioned below.) You start gnuplot by typing `gnuplot` in a |
| terminal. You will see a long banner of about 20 lines, and then the  |
| prompt `gnuplot>`. Gnuplot is terminal-driven \-- that means that you |
| have to type your commands.                                           |
|                                                                       |
| While in gnuplot you can change directories using the `cd` command    |
| much like you do in your shell. The difference is that the directory  |
| name has to be enclosed in double quotes. So, if you are not already  |
| in the directory containing the output files, go there now.           |
|                                                                       |
| The basic gnuplot command is `plot`. You can plot functions           |
| (`plot sin(x)`) and files. To plot phi vs. x, you\'d say              |
|                                                                       |
| > `plot "phi.xl" with lines`                                          |
|                                                                       |
| You will see phi plotted vs. x. Each curve is for one time step. In   |
| order to choose a particular time only, you say                       |
|                                                                       |
| > `plot "phi.xl" index 10 with points`                                |
|                                                                       |
| where \"`index 10`\" selects the 10th output (numbering starts from   |
| zero). The general form of the \"`index`\" option is                  |
| \"`index  FROM:TO:STRIDE`\", so that the command                      |
|                                                                       |
| > `plot "phi.xl" index 10:20:5 with linespoints`                      |
|                                                                       |
| plots the 10th, 15th, and 20th output with connected points. Note     |
| that you cannot change the relative order of the \"`index`\" and      |
| \"`with`\" options; the `index` option has to come before `with`.     |
|                                                                       |
| You can zoom in by specifying ranges in the x and y direction, as     |
| with                                                                  |
|                                                                       |
| > `plot [0:2][-0.25:] "phi.xl" index 10:20:5 with linespoints`        |
|                                                                       |
| which chooses the range \[0:2\] for the x axis and \[-0.25:YMAX\] for |
| the y axis. ymax is automatically determined through the data you     |
| plot.                                                                 |
|                                                                       |
| You get help with \"`help`\", especially with \"`help plot`\".        |
|                                                                       |
| You quit gnuplot with \"`quit`\".                                     |
|                                                                       |
| [4. Brushing up the graphs]{#SECTION5}                                |
| ======================================                                |
|                                                                       |
| [4.1 Comfortable input]{#SECTION51}                                   |
| -----------------------------------                                   |
|                                                                       |
| You noticed likely that, once you typed a command, the next command   |
| is often very similar. Instead of retyping the whole command, you can |
| use the cursor keys to get to what you typed previously and edit that |
| command. This is in general much faster. If your cursor keys don\'t   |
| work (i. e. if they only produce strange characters on your screen),  |
| then gnuplot has not been set up correctly. Contact your system       |
| administrator; this is a serious flaw that will greatly hinder your   |
| productivity.                                                         |
|                                                                       |
| [4.2 Basic \"`set`\" options]{#SECTION52}                             |
| -----------------------------------------                             |
|                                                                       |
| Gnuplot has many options that can be set using the \"`set`\" command: |
|                                                                       |
| -   You can add a coordinate grid to you plots with \"`set grid`\".   |
|     You have to enable the grid before you execute the plot command.  |
|     You switch off the grid with \"`set nogrid`\". Most options have  |
|     a corresponding \"`no`\"-options.                                 |
| -   You can add a title with \"`set title         TITLE`\". Your      |
|     title TITLE has to be enclosed in double quotes. See also         |
|     \"`help set title`\".                                             |
| -   You can permanently set the x and y ranges with                   |
|     \"`set xrange [min:max]`\" and \"`set yrange  [min:max]`\". You   |
|     get rid of these ranges with \"`set autoscale x`\" and            |
|     \"`set autoscale y`\".                                            |
|                                                                       |
| [4.3 Combining several graphs]{#SECTION53}                            |
| ------------------------------------------                            |
|                                                                       |
| Sometimes you want to plot several graphs on top of each other. In    |
| order to do that, you use a single plot command and separate the plot |
| options by commas, as in                                              |
|                                                                       |
| > `plot "phi.xl" index 0 with lines, "phi.xl"           index 10 with |
|  lines`                                                               |
|                                                                       |
| Notice that you get different colours that way. You can specify which |
| colours to use by adding a number after the plotting style, as in     |
| \"`with points 4`\", \"`with lines 7`\", \"`with dots 8`\". You can   |
| get a test page listing all colours by giving the \"`test`\" command. |
|                                                                       |
| If you want different labels for the different graphs that you        |
| combine, say                                                          |
|                                                                       |
| > `plot "phi.xl" index 0 title "initial" with lines, "phi.xl" index 6 |
| 0 title "final" with lines`                                           |
|                                                                       |
| (on a single line, of course). Again the order of \"index\",          |
| \"title\", and \"with\" cannot be changed.                            |
|                                                                       |
| [4.4. Saving the output / Printing]{#SECTION54}                       |
| -----------------------------------------------                       |
|                                                                       |
| After that much work you will likely want to print your work. Gnuplot |
| can output in many different formats; your screen is only one of      |
| them. To produce postscript output and write that into a file, you    |
| would first come up with the corresponding \"`plot`\" command. Then   |
| you say                                                               |
|                                                                       |
| 1.  `set output "phi.ps"`                                             |
| 2.  `set terminal postscript color` \[notice the American spelling of |
|     \"color\" here\]                                                  |
| 3.  `plot ...` \[using your cursor keys to repeat a previous command, |
|     of course\]                                                       |
| 4.  `set output` \[finish writing into the file\]                     |
| 5.  `set terminal x11` \[plot to the screen again\]                   |
|                                                                       |
| You can plot several graphs into the same file by giving several      |
| \"`plot`\" commands. They will be placed onto different pages.        |
|                                                                       |
| Colours and line styles might come out differently on the screen and  |
| on paper. You might want to output a test page (say \"`test`\"        |
| instead of \"`plot ...`\" in the above). In order to produce          |
| black-and-white graphs, leave out the \"`color`\" option in the       |
| \"`set terminal postscript`\" specification.                          |
|                                                                       |
| [5. Plotting 2D output files]{#SECTION6}                              |
| ========================================                              |
|                                                                       |
| Cactus can not only output 1D ASCII files, but also 2D files. These   |
| files contain a whole plane of data. You enable this kind of output   |
| by setting the corresponding \"2D\" parameters in your Cactus         |
| parameter file. For example, you could add the lines                  |
|                                                                       |
| > `IOASCII::out2D_every = 2`                                          |
|                                                                       |
| > `IOASCII::out2D_vars = "wavetoy::phi"`                              |
|                                                                       |
| to the WaveToy parameter file from above that you used to create the  |
| 1D output.                                                            |
|                                                                       |
| The basic gnuplot command for 2D-plots (aka surface plots) is         |
| \"`splot`\". Thus                                                     |
|                                                                       |
| > `splot "phi_2d_xy.gnuplot" index 0 with lines`                      |
|                                                                       |
| works as expected. \"`splot`\" accepts the same \"`index`\",          |
| \"`with`\", and \"`title`\" options as \"`plot`\". Do not forget      |
| about \"`help splot`\". \[Old versions of gnuplot might need a        |
| \"`set parametric`\" before they can plot surfaces. Install a current |
| version if that happens to you.\]                                     |
|                                                                       |
| You can remove the hidden lines, i. e. make the surface               |
| non-transparent, with the option \"`set hidden3d`\". After setting    |
| that option you have to replot the graph.                             |
|                                                                       |
| For surface plots there are three ranges that you can specify, namely |
| x, y, and z. So                                                       |
|                                                                       |
| > `splot [6:][6:] "phi_2d_xy.gnuplot" index 60 with lines`            |
|                                                                       |
| selects the outermost corner for displaying, while                    |
|                                                                       |
| > `splot [6:][6:][-0.1:+0.1] "phi_2d_xy.gnuplot" index 60 with lines` |
|                                                                       |
| also chooses a different (much coarser) scale on the z axis.          |
|                                                                       |
| You can add contour lines to your graph with \"`set contour`\". As    |
| \"`help set contour`\" tells you, you can draw the contour lines onto |
| the x-y plane (\"`set contour base`\"), onto the graph                |
| (\"`set contour surface`\"), or both (\"`set contour both`\"). You    |
| can even switch off the surface (\"`set nosurface`\") and display the |
| contour lines alone.                                                  |
|                                                                       |
| You get back to normal with \"`set nocontour`\" and                   |
| \"`set surface`\".                                                    |
|                                                                       |
| You can rotate the graph with \"`set view`\". See \"`help set view`\" |
| for details.                                                          |
|                                                                       |
| [6 Getting professional]{#SECTION7}                                   |
| ===================================                                   |
|                                                                       |
| Many people love their keyboards so much that they are hesitant to    |
| type more characters than absolutely necessary. Fortunately for them, |
| most gnuplot commands can be abbreviated. Instead of the cumbersome   |
|                                                                       |
| > `plot "phi.xl" index 0 title "initial" with lines, "phi.xl" index 6 |
| 0 title "final" with lines`                                           |
|                                                                       |
| from above, you can also write                                        |
|                                                                       |
| > `p "phi.xl" i 0 t "initial" w l, "" i 60 t "final" w l`             |
|                                                                       |
| Most commands and options are abbreviated by their first or first few |
| characters. An empty file name repeats the previous file name.        |
| \"`linespoints`\", by the way, is abbreviated \"`lp`\".               |
|                                                                       |
| If you want to create gnuplot scripts, then you can put these         |
| commands into a file and then execute that file with                  |
| \"`load FILENAME`\". Your FILENAME has to be put in double quotes.    |
| Your file can contain empty lines, and comments introduced by the     |
| hash (\"`#`\") character.                                             |
|                                                                       |
| You can also save your current gnuplot state (including all the       |
| \"`set`\" options currently in effect) with the \"`save FILENAME`\"   |
| command. You can then load this state again with \"`load FILENAME`\". |
|                                                                       |
| [7. Some advanced options]{#SECTION8}                                 |
| =====================================                                 |
|                                                                       |
| [7.1 Downsampling]{#SECTION81}                                        |
| ------------------------------                                        |
|                                                                       |
| If you have high resolution data, you might want to plot only every   |
| n-th data point:                                                      |
|                                                                       |
| > `plot "phi.xl" index 0 every 2 with linespoints`                    |
|                                                                       |
| > `splot "phi_2d_xy.gnuplot" index 0 every 2:2 with lines`            |
|                                                                       |
| The \"`every 2`\" and \"`every 2:2`\" display only every second grid  |
| point.                                                                |
|                                                                       |
| [7.2 Rescaling]{#SECTION82}                                           |
| ---------------------------                                           |
|                                                                       |
| You can rescale or shift the data:                                    |
|                                                                       |
| > `plot "phi.xl" index 0 using 1:($2*2) with linespoints`             |
|                                                                       |
| The expression \"`($2*2)`\" multiplies all values in the second       |
| column (\"`$2`\") with 2 before it is displayed. You can put          |
| arbitrary expressions in a C-like syntax here, such as                |
| \"`(sqrt($2*$2))`\" for the absolute value, or \"`(2*pi*$2)`\" to     |
| multiply by 2 pi, or add a sine wave as in \"`($2+sin($1))`\". You    |
| can also modify the x coordinate. The whole formula has to be put in  |
| parentheses.                                                          |
|                                                                       |
| An expression that is sometimes useful is \"`(test ? value : 0/0)`\". |
| It displays the value only if \"`test`\" is true. Otherwise the value |
| is omitted from the graph.                                            |
|                                                                       |
| [7.3. Scripting]{#SECTION83}                                          |
| ----------------------------                                          |
|                                                                       |
| You can not only display files, but arbitrary output produced by      |
| other programmes. This is especially helpful to preprocess data files |
| through scripts, e. g. using paste, awk, or perl. For reasons of      |
| space I will not describe using awk or perl here.                     |
|                                                                       |
| Assume that you want to plot the difference between the global        |
| minimum and maximum versus time (for whatever reason). You can easily |
| plot the minimum and maximum themselves with                          |
|                                                                       |
| > `plot "phi_min.tl" with lines, "phi_max.tl" with lines`             |
|                                                                       |
| but combining values from different files into a single curve         |
| requires some magic: The line                                         |
|                                                                       |
| > `plot "< paste phi_min.tl phi_max.tl" using 1:($4-$2) with lines`   |
|                                                                       |
| plots the desired difference. Gnuplot treats a filename that starts\\ |
| with \"`<`\" not as a regular file, but as a command that is          |
| executed. The output of that command is then plotted.                 |
|                                                                       |
| The Unix command \"`paste`\" takes its input files and concatenates   |
| their individual lines. The input files \"`phi_min.tl`\" and          |
| \"`phi_max.tl`\" have two columns each, thus the output of the paste  |
| command has four columns. The \"`using`\" option plots the first      |
| column (the time) versus the difference of the fourth and second      |
| column, i. e. the difference between the maximum and minimum. (The    |
| third column contains again the time.) See \"`man paste`\" in Unix    |
| and \"`help plot special-filenames`\" and \"`help plot using`\" in    |
| gnuplot.                                                              |
|                                                                       |
| [8. 3D plots of time evolutions]{#SECTION9}                           |
| ===========================================                           |
|                                                                       |
| It is often convenient to produce a 3D plot that shows how            |
| e. g. \"`phi.xl`\" evolves in time. A naive                           |
|                                                                       |
| > `splot "phi.xl" using 2 with lines`                                 |
|                                                                       |
| doesn\'t work \-- all curves sit on top of each other instead of next |
| to each other. An unhappy coincidence means that the gnuplot files    |
| produced by Cactus contain too many empty lines for that; it is       |
| necessary to remove every second empty line. This can be achieved     |
| with an awk script, as in                                             |
|                                                                       |
| > `splot "< awk '{ if (NF==0) ++el; else el=0; if (el<2) print; }' ph |
| i.xl" using 2 with lines`                                             |
|                                                                       |
| In the above command (which has to be on a single line) be sure to    |
| get the quotes and apostrophes correct.                               |
|                                                                       |
| [9. Closing remarks]{#SECTION10}                                      |
| ================================                                      |
|                                                                       |
| Gnuplot scales well. I have successfully used gnuplot with data files |
| several hundred Megabytes large, on machines with much less main      |
| memory. I never had gnuplot crash on me.                              |
|                                                                       |
| Gnuplot is actively maintained and available on many platforms. The   |
| current beta versions allow mouse interactions with the graph, for    |
| example rotating a 3D image.                                          |
|                                                                       |
| Gnuplot (together with the various scripting languages) is a very     |
| powerful tool. You can produce reasonable graphs with just a few      |
| commands, but there are many more than shown here in this             |
| introduction. The ability to write programmes and execute them later  |
| makes it easy to repeat previous work, should, hypothetically, any    |
| data files change just hours prior to a deadline. It also makes it    |
| less tedious to produce many similar graphs.                          |
+-----------------------------------------------------------------------+
