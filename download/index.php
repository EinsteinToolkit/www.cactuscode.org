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
 <tr><td> C 
</td><td> C++
</td></tr>
 <tr><td> CPP 
</td><td> F90/F77
</td></tr>
 <tr><td> GNU make
</td><td> ctags/etags
</td></tr>
 <tr><td> SVN
</td><td>
</td></tr>
</table>

<h3>Getting the Code</h3>
<h4>Method #1: GetComponents</h4>

<ul>
<p> Cactus is maintained using <a
href="http://subversion.apache.org/">Subversion</a>.  
The preferred method is to use the <kbd>GetComponents</kbd> script along with
a thornlist as described below.  We maintain a 
<a href="/download/thorns/">page of basic thornlists</a>, 
but you can use your own customized thornlist.</p>

<p> Download 
<a href="GetComponents.php">GetComponents</a> and make sure it is executable. 
<code>wget --no-check-certificate https://raw.github.com/gridaphobe/CRL/master/GetComponents
chmod a+x GetComponents </code></p>

<p> To checkout the Cactus flesh and required thorns, choose and save one of
our 
<a href="thorns">ThornLists</a> 
(or provide your own) and issue the command: 
<code>./GetComponents &lt;<var>thornlist-name</var>&gt;</code>
</ul>

<h4>Method #2: Subversion</h4>

<ul>

<p> Instead of using the <kbd>GetComponents</kbd> script, you can also check
out Cactus and the Cactus Computational Toolkit using <kbd>svn</kbd> commands
or another Subversion client.  The main Cactus Subversion Server
(<kbd>svn.cactuscode.org</kbd>) hosts several different repositories including
different branches for the stable and development versions of Cactus.  </p>

<p> The Subversion server can be use anonymously to checkout Cactus
components. It supports both http and https connections, but only https can
be used for authenticated logins, e.g. for commits to the repositories.  </p>

<p> Check out the Cactus flesh: 
<code>svn co http://svn.cactuscode.org/flesh/branches/Cactus_4.2.0 Cactus</code> 
Move to the arrangements directory of the Cactus installation and install the
required arrangements and thorns: 
<code>cd Cactus/arrangements</code> 
If you are using thorns other than those in the standard Cactus distributions
you will need to know the details for downloading or checking them out. Here
we just describe checking out from the Cactus distribution.  </p>

<p> To checkout individual thorns (e.g. see our standard <a
href="/documentation/thorns/">ThornLists</a>):

<code>svn co http://svn.cactuscode.org/arrangements/&lt;<var>arrangement</var>&gt;/&lt;<var>thorn</var>&gt;/branches/Cactus_4.2.0 &lt;<var>thorn</var>&gt;</code>
</p>
</ul>
<!--
<h4>Method #3: Virtual Machine</h4>

Download VirtualBox <a href="https://www.virtualbox.org/wiki/Downloads">here</a>, then follow the installation instructions.

<code>wget http://www.cct.lsu.edu/~dcastl2/cOS.tgz
tar -xvvzf http://www.cct.lsu.edu/~dcastl2/cOS.tgz</code>

You may then run VirtualBox. Create a new virtual machine. When prompted whether you want to use a new or existing hard disk, select 'Use Existing Hard Disk',
then select the CactusOS VirtualBox .vdi file from your VirtualBox VMs folder.
-->
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
