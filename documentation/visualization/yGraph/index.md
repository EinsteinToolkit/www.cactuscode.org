---
layout: default
title: yGraph
---
+-----------------------------------------------------------------------+
| ### ygraph: Animated, Easy Client for 1D Line Plots                   |
|                                                                       |
| +--------------------------------+--------------------------------+   |
| | ygraph is a freely available,  | -   [Download](#download)      |   |
| | lightweight and easy to use    | -   [Using](#using)            |   |
| | visualization client for       | -   [Support](#support)        |   |
| | viewing 1D data files. It      |                                |   |
| | includes features for          |                                |   |
| | animation, zooming and saving  |                                |   |
| | to postscript. (Also see the   |                                |   |
| | page for [xgraph](../xGraph).) |                                |   |
| |                                |                                |   |
| | ygraph was developed by Denis  |                                |   |
| | Pollney, based on the xgraph   |                                |   |
| | package. The source code can   |                                |   |
| | be obtained from the           |                                |   |
| | Subversion repository          |                                |   |
| | <https://svn.cactuscode.org/Vi |                                |   |
| | zTools/ygraph/trunk>.          |                                |   |
| +--------------------------------+--------------------------------+   |
|                                                                       |
| +------------------------------------------------------------------+  |
| | [![XGraph Image](yGraph.gif)](yGraph.gif)                        |  |
| +------------------------------------------------------------------+  |
|                                                                       |
| []{#using}                                                            |
|                                                                       |
| ### Using ygraph                                                      |
|                                                                       |
| ygraph can be used to view one or multiple 1D data files with the     |
| format                                                                |
|                                                                       |
| `       `                                                             |
|                                                                       |
|     "Time=0.0                                                         |
|     0.0  0.0                                                          |
|     0.2  0.04                                                         |
|     0.4  0.16                                                         |
|     0.6  0.36                                                         |
|     0.8  0.64                                                         |
|     1.0  1.0                                                          |
|                                                                       |
|     "Time=1.0                                                         |
|     0.0  0.0                                                          |
|     0.2 -0.04                                                         |
|     0.4 -0.16                                                         |
|     0.6 -0.36                                                         |
|     0.8 -0.64                                                         |
|     1.0 -1.0                                                          |
|                                                                       |
| Such files can be created with the Cactus thorns `CactusBase/IOASCII` |
| and `CactusBase/IOBasic`                                              |
|                                                                       |
| Viewing files is as easy as typing                                    |
|                                                                       |
| `          `                                                          |
|                                                                       |
|     ygraph <data filename> <data filename>                            |
|                                                                       |
| The are several options for customising aspects of and using ygraph,  |
| a manpage can be built from the source, or type `ygraph --help` for   |
| more information.                                                     |
|                                                                       |
| If you are using thorn `CactusConnect/HTTPD` you can setup your       |
| browser to automatically view any advertised ygraph files.            |
| Instructions on how to do this are provided in the                    |
| [WebServer-HOWTO](/documentation/tutorials/webServerHowTo.txt).       |
|                                                                       |
| []{#download}                                                         |
|                                                                       |
| ### Getting Hold of ygraph                                            |
|                                                                       |
| Binaries and source code for ygraph are all available from the        |
| [ygraph subversion                                                    |
| repository](https://svn.cactuscode.org/VizTools/ygraph/trunk).        |
|                                                                       |
| ### Compilation of ygraph on Macs                                     |
|                                                                       |
| Thanks to Bruno Giacomazzo we have a step-through-like tutorial on    |
| how to compile ygraph on Macs:                                        |
|                                                                       |
| 1.  install svn, gtk+, gtk+2 and gtk+2-dev with Fink                  |
| 2.  svn co https://svn.cactuscode.org/VizTools/ygraph/trunk ygraph    |
|                                                                       |
| 3.  cd ygraph                                                         |
|                                                                       |
| 4.  gettextize -c --no-changelog --intl                               |
|                                                                       |
| 5.  aclocal -I m4                                                     |
|                                                                       |
|     (suggested by gettextize)                                         |
|                                                                       |
| 6.  touch ABOUT-NLS                                                   |
|                                                                       |
|     (otherwise it complains that this file doesn\'t exist)            |
|                                                                       |
| 7.  autoreconf -i                                                     |
|                                                                       |
| 8.  ./configure --disable-gtktest                                     |
|                                                                       |
|     (otherwise it comlplains that gtk2 doesn\'t have gtk-config)      |
|                                                                       |
| 9.  edit                                                              |
|                                                                       |
|         src/Makefile                                                  |
|                                                                       |
|     and change \'gcc\' into \'gcc -arch i386\' (otherwise Mac         |
|     complains that the libraries installed via Fink are incompatible) |
|                                                                       |
| 10. ln -s intl/libintl.rc intl/libintl.a                              |
|                                                                       |
| 11. make                                                              |
|                                                                       |
|     (this will create the ygraph executable in the src subdirectory)  |
|                                                                       |
| []{#support}                                                          |
|                                                                       |
| ### Support                                                           |
|                                                                       |
| Please direct questions about ygraph to                               |
| *[denis.pollney\@gmail.com](%0A%20%20%20%20%20%20%20%20mailto:denis.p |
| ollney@gmail.com)*                                                    |
+-----------------------------------------------------------------------+
