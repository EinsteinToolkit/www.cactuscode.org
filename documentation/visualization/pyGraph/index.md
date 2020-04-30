---
layout: default
title: pyGraph
---
<table>
<colgroup>
<col style="width: 100%" />
</colgroup>
<tbody>
<tr class="odd">
<td><h3 id="pygraph-animated-easy-client-for-1d-line-plots">pyGraph: Animated, Easy Client for 1D Line Plots</h3>
<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td><p>pyGraph is a freely available, lightweight and easy to use visualization client for viewing 1D data files which started out as a python re-implementation of <a href="../yGraph">yGraph</a>.. It includes features for animation, zooming and saving to png. (Also see the page for <a href="../yGraph">ygraph</a>.)</p>
<p>pyGraph was developed by David Radice. The source code can be obtained from the Mercurial repository <a href="https://bitbucket.org/dradice/pygraph/">https://bitbucket.org/dradice/pygraph/</a>. pyGraph relies on <a href="https://bitbucket.org/dradice/scidata/">https://bitbucket.org/dradice/scidata/</a> to read in Cactus data files.</p></td>
<td><ul>
<li><a href="#download">Download</a></li>
<li><a href="#using">Using</a></li>
<li><a href="#support">Support</a></li>
</ul></td>
</tr>
</tbody>
</table>
<table>
<colgroup>
<col style="width: 100%" />
</colgroup>
<tbody>
<tr class="odd">
<td><p><a href="pyGraph.png"><img src="pyGraph.png" alt="pyGraph main window" /></a></p></td>
</tr>
</tbody>
</table>
<span id="using"></span>
<h3 id="using-pygraph">Using pyGraph</h3>
<p>pyGraph can be used to view one or multiple 1D data files with the format</p>
<code>       </code>
<pre><code>&quot;Time=0.0
0.0  0.0
0.2  0.04
0.4  0.16
0.6  0.36
0.8  0.64
1.0  1.0

&quot;Time=1.0
0.0  0.0
0.2 -0.04
0.4 -0.16
0.6 -0.36
0.8 -0.64
1.0 -1.0</code></pre>
<p>Such files can be created with the Cactus thorns <code>CactusBase/IOASCII</code> and <code>CactusBase/IOBasic</code></p>
<p>Viewing files is as easy as typing</p>
<code>          </code>
<pre><code>ygraph &lt;data filename&gt; &lt;data filename&gt;</code></pre>
<p>The are several options for customising aspects of and using ygraph, a manpage can be built from the source, or type <code>pygraph --help</code> for more information.</p>
<p>If you are using thorn <code>CactusConnect/HTTPD</code> you can setup your browser to automatically view any advertised ygraph files. Instructions on how to do this are provided in the <a href="/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.</p>
<span id="download"></span>
<h3 id="getting-hold-of-pygraph">Getting Hold of pyGraph</h3>
<p>Binaries and source code for ygraph are all available from the <a href="https://bitbucket.org/dradice/pygraph/">pyGraph mercurial repository</a>.</p>
<h3 id="installation">Installation</h3>
<p>pyGraph requires the following packages to be available</p>
<ul>
<li>PyQt-4, including its development tools for pyrcc4</li>
<li>PythonQwt</li>
</ul>
and once those are installed pygraph and its scidata depency can be installed using pip
<pre><code>        pip install --user hg+https://bitbucket.org/dradice/scidata
        pip install --user hg+https://bitbucket.org/dradice/pygraph
    </code></pre>
<span id="support"></span>
<h3 id="support">Support</h3>
<p>Please direct questions about pyGraph to its bitbucket ticket page <a href="https://bitbucket.org/dradice/pygraph/issues">https://bitbucket.org/dradice/pygraph/issues</a></p></td>
</tr>
</tbody>
</table>
