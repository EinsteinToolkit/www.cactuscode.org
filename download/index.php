<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Download Cactus';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<a name="requirements"/></a>
<h3>Requirements</h3>
<table> 
 <tr><td style=color:green> Required
</td><td style=color:black> Optional 
</td></tr>
 <tr><td> Perl
</td><td> MPI
</td></tr>
 <tr><td> C, C++
</td><td> F90
</td></tr>
 <tr><td> CPP
</td><td> ctags/etags
</td></tr>
 <tr><td> GNU make
</td><td> Python
</td></tr>
 <tr><td> svn, git
</td><td>
</td></tr>
</table>

<h3>Getting the Code</h3>

<ul>
<p> Cactus is maintained using <a
href="http://subversion.apache.org/index.html">Subversion</a> and <a href="https://git-scm.com/">git</a>.
The preferred method is to use the <kbd>GetComponents</kbd> script along with
a thornlist as described below.  We maintain a 
<a href="/download/thorns/index.html">page of basic thornlists</a>,
but you can use your own customized thornlist.</p>

<p> Download 
<a href="GetComponents.php">GetComponents</a> and make sure it is executable. 
<code>wget --no-check-certificate https://raw.github.com/gridaphobe/CRL/Cactus_4.3.0/GetComponents
chmod a+x GetComponents </code></p>

<p> To checkout the Cactus flesh and required thorns, choose and save one of
our 
<a href="thorns">ThornLists</a> 
(or provide your own) and issue the command: 
<code>./GetComponents &lt;<var>thornlist-name</var>&gt;</code>
</ul>

<h3>License</h3> 

<p> The Cactus Code is (C) Copyrighted by the individual Authors and
distributed under the 
<a href="http://www.gnu.org/copyleft/lgpl.html"
>GNU Lesser General Public License</a>.  
Most of the computational packages that come with it follow this license, but
the authors of any thorn are free to follow any licensing they deem
appropriate as long as they state it explicitly in their thorn distribution.
</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
