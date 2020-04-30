---
layout: default
title: IsoView
---
<table>
<colgroup>
<col style="width: 100%" />
</colgroup>
<tbody>
<tr class="odd">
<td><h1 id="isoview---the-lightweight-isosurfacer-visualization-client">IsoView - The lightweight IsoSurfacer Visualization Client</h1>
<h1 id="section"><a href="isoview.png"><img src="isoview.png" width="400" height="300" /></a></h1>
<h3 id="about">About</h3>
<strong>Current Version: 2.0 RC1</strong>
<p>IsoView version 2 was developed to replace IsoView version 1, which was heavily dependent on VTK. IsoView version 2 uses pure OpenGL to handle rendering, making it very lightweight. IsoView V2 is a visualization client originally developed for the CactusCode project at Lawrence Berkeley National Laboratory, and now is maintained and developed at Louisiana State University.</p>
<h3 id="files">Files</h3>
<strong>IsoView</strong>
<ul>
<li><a href="IsoView-RC1-MD5SUMS">MD5SUMS</a> - MD5 sums for current tar balls</li>
<li><a href="IsoView-RC1-Linux.tar.bz2">IsoView-RC1-Linux.tar.bz2</a> - IsoView Linux binary, tar-bzip format</li>
<li><a href="IsoView-RC1-Linux.tar.gz">IsoView-RC1-Linux.tar.gz</a> - IsoView Linux binary, tar-gzip format</li>
<li><a href="IsoView-RC1-Macintosh.tar.bz2">IsoView-RC1-Macintosh.tar.bz2</a> - IsoView Macintosh binary, tar-bzip format</li>
<li><a href="IsoView-RC1-Macintosh.tar.gz">IsoView-RC1-Macintosh.tar.gz</a> - IsoView Macintosh binary, tar-gzip format</li>
<li><a href="IsoView-RC1-source.tar.bz2">IsoView-RC1-source.tar.bz2</a> - IsoView source, tar-bzip format</li>
<li><a href="IsoView-RC1-source.tar.gz">IsoView-RC1-source.tar.gz</a> - IsoView source, tar-gzip format</li>
</ul>
<strong>Other</strong>
<ul>
<li><a href="IsoSurfacer.c">IsoSurfacer.c</a> - Updated IsoSurfacer.c to run this version of IsoView.</li>
<li><a href="WaveDemo.par">WaveDemo.par</a> - Updated WaveDemo.par file</li>
</ul>
<h3 id="installation">Installation</h3>
<ul>
<li>Get the IsoView source</li>
<li>Untar the package and enter the IsoView directory</li>
<li>Alter the make file, changing the second line to match your TCPXX installation</li>
<li>If you did NOT install fltk to its normal place, or it is not in your path, you will need to edit the makefile some more</li>
<li>At this point, if everything is setup correctly, and the code gods smile, then all you should need to do is 'make'</li>
</ul>
<strong>Updating the WaveToy Demo</strong> If you did not checkout IsoSurface from the development branch of CVS, you will need to update your IsoSurfacer.c file. You will also need to update your parameter file.
<ul>
<li>Get the IsoSurface.c file, and place it in: Cactus/arrangements/CactusPUGHIO/IsoSurfacer/src, overwriting the current file</li>
<li>Now download and use the new parameter file</li>
</ul>
<h3 id="tested-platform">Tested Platform</h3>
<strong>Linux</strong>
<ul>
<li>Slackware 10.0 - 2.6.10 on i686 using MESA</li>
</ul>
<strong>Macintosh</strong>
<ul>
<li>OS 10.3 - 7.6.0 on a PowerBook G4</li>
</ul>
<h3 id="known-issues">Known Issues</h3>
<ul>
<li>You may see some warnings about using deprecated functions during compile. These are related to TCPXX, and I have no control over them.</li>
<li>When steering, some IsoValues result in very strange results. I believe this is a bug with IsoSurfacer or the simulation, not IsoView.</li>
</ul>
<h3 id="bugs">Bugs</h3>
Please e-mail bug reports to: <a href="mailto:iwsmith%3Cat%3Ecct%3Cdot%3Elsu%3Cdot%3Eedu">iwsmith(at)cct(dot)lsu(dot)edu</a></td>
</tr>
</tbody>
</table>
