---
layout: default
title: xGraph
---
{% include base.html %}
<h3 id="xgraph-animated-easy-client-for-1d-line-plots">xgraph: Animated, Easy Client for 1D Line Plots</h3>
xgraph is a freely available, lightweight and easy to use visualization client for viewing 1D data files. It includes features for animation, zooming and saving to postscript. (Also see the page for <a href="../yGraph">ygraph</a>.)

- <a href="#download">Downloading</a>
- <a href="#using-xgraph">Using</a>
- <a href="#support">Support</a>

<a href="xGraph2.gif"><img src="xGraph2.gif" alt="XGraph Image" /></a>

<h3 id="using-xgraph">Using xgraph</h3>
xgraph can be used to view 1D data files with the format

```
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
1.0 -1.0
```

Viewing a file is as easy as typing
```
xgraph <data filename>
```

The are many options for customising aspects of and using xgraph (for example an animation option), type `xgraph -help` to see them. The image at the top of the page was created from the above data using

```
xgraph xgraph.dat -lw 2 -P -t "Easy Plot"
```

If you are using thorn `CactusConnect/HTTPD` you can setup your browser to automatically view any advertised xgraph files. Instructions on how to do this are provided in the <a href="{{base}}/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.

<h3 id="downloading-xgraph">Downloading xgraph</h3>
***Binaries***  
Statically linked executables for some platforms are <a href="http://jean-luc.aei.mpg.de/Codes/xgraph/">available</a>

***Source Code from SVN Repository***  
Checking out from the Cactus SVN repository allows you to easily update your code to obtain bug fixes or enhancements or to contribute back to us your own improvements. If you choose this option, you may wish to get update messages for any commits to the repository; if so, please contact us. To checkout from the repository, issue from a terminal:</p>
***svn checkout https://svn.cactuscode.org/VizTools/xgraph***

<h3 id="support">Support</h3>
Please direct questions about xgraph to <a href="mailto:cactusmaint@cactuscode.org">cactusmaint@cactuscode.org</a>
