---
layout: default
title: yGraph
---
{% include base.html %}
<h3 id="ygraph-animated-easy-client-for-1d-line-plots">ygraph: Animated, Easy Client for 1D Line Plots</h3>
ygraph is a freely available, lightweight and easy to use visualization client for viewing 1D data files. It includes features for animation, zooming and saving to postscript. (Also see the page for <a href="../xGraph">xgraph</a>.)

ygraph was developed by Denis Pollney, based on the xgraph package. The source code can be obtained from the Subversion repository <a href="https://svn.cactuscode.org/VizTools/ygraph/trunk">https://svn.cactuscode.org/VizTools/ygraph/trunk</a>.


- <a href="#getting-hold-of-ygraph">Download</a>
- <a href="#using-ygraph">Using</a>
- <a href="#support">Support</a>

<a href="yGraph.gif"><img src="yGraph.gif" alt="XGraph Image" /></a>

<h3 id="using-ygraph">Using ygraph</h3>
ygraph can be used to view one or multiple 1D data files with the format

```
&Time=0.0
0.0  0.0
0.2  0.04
0.4  0.16
0.6  0.36
0.8  0.64
1.0  1.0

&Time=1.0
0.0  0.0
0.2 -0.04
0.4 -0.16
0.6 -0.36
0.8 -0.64
1.0 -1.0
```
Such files can be created with the Cactus thorns `CactusBase/IOASCII` and `CactusBase/IOBasic`

Viewing files is as easy as typing
```
ygraph &lt;data filename&gt; &lt;data filename&gt;
```
The are several options for customising aspects of and using ygraph, a manpage can be built from the source, or type `ygraph --help` for more information.

If you are using thorn `CactusConnect/HTTPD` you can setup your browser to automatically view any advertised ygraph files. Instructions on how to do this are provided in the <a href="{{base}}/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.


<h3 id="getting-hold-of-ygraph">Getting Hold of ygraph</h3>
Binaries and source code for ygraph are all available from the <a href="https://svn.cactuscode.org/VizTools/ygraph/trunk">ygraph subversion repository</a>.

<h3 id="compilation-of-ygraph-on-macs">Compilation of ygraph on Macs</h3>
Thanks to Bruno Giacomazzo we have a step-through-like tutorial on how to compile ygraph on Macs:


1. install svn, gtk+, gtk+2 and gtk+2-dev with Fink
1. `svn co https://svn.cactuscode.org/VizTools/ygraph/trunk ygraph`
1. `cd ygraph`
1. `gettextize -c --no-changelog --intl`
1. `aclocal -I m4`  
(suggested by gettextize)
1. `touch ABOUT-NLS`  
(otherwise it complains that this file doesn't exist)
1. `autoreconf -i`
1. `./configure --disable-gtktest`  
(otherwise it comlplains that gtk2 doesn't have gtk-config)
1. edit `src/Makefile` and change `gcc` into `gcc -arch i386` (otherwise Mac complains that the libraries installed via Fink are incompatible)
1. `ln -s intl/libintl.rc intl/libintl.a`
1. `make`  
(this will create the ygraph executable in the src subdirectory)


<h3 id="support">Support</h3>
Please direct questions about ygraph to *<a href="mailto:denis.pollney@gmail.com">denis.pollney@gmail.com</a>*

