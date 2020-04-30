---
layout: default
title: Amira
---
### Amira: ZIB's Advanced 3D Visualization System

[Amira](http://amira.zib.de/) is a research software package for the
development of new advanced high-end visualization methods, developed by
the [visualization department](http://www.zib.de/Visual/) of the
[Konrad-**Z**use-Center](http://www.zib.de) for **I**nformation
Techniques **B**erlin(ZIB).

[![Amira Movies](amira1.gif)](http://jean-luc.aei.mpg.de/NCSA1999/)

Amira can be used to view 3D data of scalar fields, vector fields,
tensor fields, apparent horizon multipole expansions and gaussian
curvature data, embedding coefficients, remotely computed isosurfaces
(similarly to [IsoView](../IsoView/)), geodesics, and more. For remote
visualization a remote control interface for steering Cactus simulations
is also available.

-   [Obtaining](#download)
-   [Using](#using)
-   [Support](#support)

<span id="download"></span>

### Obtaining Amira

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td>    </td>
<td><p><strong>Demo Version</strong><br />
A free time-limited, but renewable demo version is available for <a href="http://amira.zib.de/download/">downloading from ZIB</a> after registration. In addition you need the (free) Numerical Relativity extension for handling Cactus data.</p>
<p><strong>Commercial Version</strong><br />
<a href="http://www.amiravis.com/">Amira</a> is distributed commercially through <a href="http://www.tgs.com">Template Graphics Software</a>. Please enquire at this site for a fully qualified version.</p>
<p><strong>Special Arrangements for Cooperation Partners</strong><br />
Special arrangements can be established for partners contributing to the Amira development process. Cooperation partners may receive renewable free updates of the internal development version of Amira including the newest features and bugfixes.</p></td>
</tr>
</tbody>
</table>

<span id="using"></span>

### Using Amira

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td>    </td>
<td><p>Amira is designed for an end-user who has minimal experience with visualization tools, meaning that anything deemed untrivial is considered to be too complicated and should be treated as a bug.</p>
<p>Amira provides a kind of visualization network, which graphically displays the current settings and relationships among the visualization components. In contrast to other tools like AVS or IBM DX, you don't see a (possibly complicated) data flow diagram, instead the data is directly displayed as (green) icons and the appropriate displays pop up from right-mouse button clicks on the green icons.</p>
<strong>Predefined Networks <a href="http://www.zib.de/geodesics/"><img src="kerr.jpg" /></a></strong>
<p>While it is easy, with only a little experience, to construct simple visualization networks from scratch, a couple of `standard' visualization networks which arise in every-day work with Cactus data are predefined. To get a list of all these (daily growing) list of networks, simply issue</p>
<code>          </code>
<pre><code>amira2000 &#39;+?&#39;</code></pre>
on the command line. This will print a list of available networks and, for example, starting Amira with <code>         </code>
<pre><code>amira2000 +remoteviz</code></pre>
will launch Amira ready for retrieving data from a <a href="http://www.zib.de/geodesics/">remote simulation</a>.
<p><img src="1s.gif" /> <strong>Working with 3D data</strong></p>
<p>As an example of looking at some data set, for example 3D data in FlexIO format written by Cactus, simply invoke Amira with the appropriate filename, e.g.</p>
<code>         </code>
<pre><code>amira2000 psi0re_3d.ieee</code></pre>
Note that large datasets beyond the 2GB limit are supported and can be handled, conveniently fast, with on-demand loading
<p>A green data icon will appear, named according to the file name. From that, use the right-mouse button to select a `timeslice' data set, for which a number of visualization modules can be applied.</p></td>
</tr>
</tbody>
</table>

<span id="support"></span>

### Support

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td>    </td>
<td><p>Amira is used by the following projects (as part of a ZIB-AEI cooperation):</p>
<p><a href="http://www.zib.de/visual/projects/ART/"><strong>ART Project</strong></a> - Visualization of General Relativity</p>
<p><a href="http://www.zib.de/visual/projects/amr/amr.en.html"><strong>AMR Project</strong></a> - Visualization of Hierarchical Datasets</p>
<p><a href="http://www.zib.de/visual/projects/TIKSL/"><strong>TIKSL Project</strong></a> - Remote Visualization</p>
<p><a href="http://www.griksl.org"><strong>GriKSL Project</strong></a> - Remote Visualization</p>
<p>Please write to the individual peoples associated with these projects with specific questions, or write to <a href="mailto:amira@zib.de">amira@zib.de</a> for general inquiries.</p></td>
</tr>
</tbody>
</table>
