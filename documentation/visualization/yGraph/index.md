---
layout: default
title: yGraph
---
{% include base.html %}
<table>
<colgroup>
<col style="width: 100%" />
</colgroup>
<tbody>
<tr class="odd">
<td><h3 id="ygraph-animated-easy-client-for-1d-line-plots">ygraph: Animated, Easy Client for 1D Line Plots</h3>
<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td><p>ygraph is a freely available, lightweight and easy to use visualization client for viewing 1D data files. It includes features for animation, zooming and saving to postscript. (Also see the page for <a href="../xGraph">xgraph</a>.)</p>
<p>ygraph was developed by Denis Pollney, based on the xgraph package. The source code can be obtained from the Subversion repository <a href="https://svn.cactuscode.org/VizTools/ygraph/trunk">https://svn.cactuscode.org/VizTools/ygraph/trunk</a>.</p></td>
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
<td><p><a href="yGraph.gif"><img src="yGraph.gif" alt="XGraph Image" /></a></p></td>
</tr>
</tbody>
</table>
<span id="using"></span>
<h3 id="using-ygraph">Using ygraph</h3>
<p>ygraph can be used to view one or multiple 1D data files with the format</p>
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
<p>The are several options for customising aspects of and using ygraph, a manpage can be built from the source, or type <code>ygraph --help</code> for more information.</p>
<p>If you are using thorn <code>CactusConnect/HTTPD</code> you can setup your browser to automatically view any advertised ygraph files. Instructions on how to do this are provided in the <a href="{{base}}/documentation/tutorials/webServerHowTo.txt">WebServer-HOWTO</a>.</p>
<span id="download"></span>
<h3 id="getting-hold-of-ygraph">Getting Hold of ygraph</h3>
<p>Binaries and source code for ygraph are all available from the <a href="https://svn.cactuscode.org/VizTools/ygraph/trunk">ygraph subversion repository</a>.</p>
<h3 id="compilation-of-ygraph-on-macs">Compilation of ygraph on Macs</h3>
<p>Thanks to Bruno Giacomazzo we have a step-through-like tutorial on how to compile ygraph on Macs:</p>
<ol>
<li>install svn, gtk+, gtk+2 and gtk+2-dev with Fink</li>
<li><pre><code>svn co https://svn.cactuscode.org/VizTools/ygraph/trunk ygraph</code></pre></li>
<li><pre><code>cd ygraph</code></pre></li>
<li><pre><code>gettextize -c --no-changelog --intl</code></pre></li>
<li><pre><code>aclocal -I m4</code></pre>
<p>(suggested by gettextize)</p></li>
<li><pre><code>touch ABOUT-NLS</code></pre>
<p>(otherwise it complains that this file doesn't exist)</p></li>
<li><pre><code>autoreconf -i</code></pre></li>
<li><pre><code>./configure --disable-gtktest</code></pre>
<p>(otherwise it comlplains that gtk2 doesn't have gtk-config)</p></li>
<li><p>edit</p>
<pre><code>src/Makefile</code></pre>
<p>and change 'gcc' into 'gcc -arch i386' (otherwise Mac complains that the libraries installed via Fink are incompatible)</p></li>
<li><pre><code>ln -s intl/libintl.rc intl/libintl.a</code></pre></li>
<li><pre><code>make</code></pre>
<p>(this will create the ygraph executable in the src subdirectory)</p></li>
</ol>
<span id="support"></span>
<h3 id="support">Support</h3>
<p>Please direct questions about ygraph to <em><a href="%0A%20%20%20%20%20%20%20%20mailto:denis.pollney@gmail.com">denis.pollney@gmail.com</a></em></p></td>
</tr>
</tbody>
</table>
