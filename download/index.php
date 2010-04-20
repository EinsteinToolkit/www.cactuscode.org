<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Download Cactus';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h3>License</h3>

<p>
  The Cactus Code is (C) Copyrighted by the individual Authors and
  distributed under
  the <a href="http://www.gnu.org/copyleft/lgpl.html">GNU Lesser
  General Public License</a>.  Most of the computational packages that
  come with it follow this license, but the authors of any thorn are
  free to follow any licensing they deem appropriate as long as they
  state it explicitly in their thorn distribution.
</p>

<h3>Getting the Code</h3>

<p>
  Cactus is maintained
  using <a href="http://subversion.apache.org/">Subversion</a>.
  The preferred method is to use
  the <kbd>GetComponents</kbd> script along with a thornlist as described
  below.  We maintain a <a href="/download/thorns/">page of basic
  thornlists</a>, or you can use your own customized thornlist.
</p>

<p>
  Save the <a href="GetComponents">checkout script</a> with the
  name <kbd>GetComponents</kbd> and make it executable.
</p>

<code>wget http://www.cactuscode.org/download/GetComponents</code>
<code>chmod a+x GetComponents</code>

<p>
  To checkout an application version of Cactus, choose and save
  a <a href="thorns">ThornList</a>, or provide one to
  your own needs, and issue the command:
<code>./GetComponents &lt;<var>thornlist-name</var>&gt;</code>
  To add more Thorns to your Cactus, either use
  the <kbd>GetComponents</kbd> script with a new Thorn List, or use the
  below make target from within the Cactus distribution.
  (Using <kbd>GetComponents</kbd> is preferred).
<code>gmake checkout</code>
</p>

<h3>Subversion Repositories</h3>

<p>
  Instead of using the <kbd>GetComponents</kbd> script, you can also check
  out Cactus using <kbd>svn</kbd> commands or another Subversion client.
  The main Cactus Subversion Server (<kbd>svn.cactuscode.org</kbd>) hosts
  several different repositories
<!--  (explained <a href="/documentation/tutorials/CactusRepositories-HOWTO.txt">CactusRepositories-HOWTO</a>),-->
  including different branches for the stable and development
  versions of Cactus.
</p>
<!---
<p>
  To checkout flesh and Thorns for the stable release, move to the
  directory where the Cactus installation should be made.  (For the
  latest development version of Cactus, use <kbd>/cactusdevcvs</kbd>
  instead of <kbd>/cactus</kbd> everywhere below).
</p>
-->

<p>
  The Subversion server can be use anonymously to checkout Cactus components.
  It supports both http and https connections, but only https can be used for
  authenticated logins, e.g. for commits to the repositories.
</p>
<p>
  Check out the Cactus flesh:
<code>svn co http://svn.cactuscode.org/flesh/trunk Cactus</code>
  Move to the arrangements directory of the Cactus installation and
  install the required arrangements and thorns:
<code>cd Cactus/arrangements</code>
  If you are using thorns other than those in the standard Cactus
  distributions you will need to know the details for downloading or
  checking them out. Here we just describe checking out from the
  Cactus distribution.
</p>

<p>
  To checkout individual thorns (e.g. see our standard
  <a href="/documentation/thorns/">ThornLists</a>):

<code>svn co http://svn.cactuscode.org/arrangements/&lt;<var>arrangement</var>&gt;/&lt;<var>thorn</var>&gt;/trunk &lt;<var>thorn</var>&gt;</code>
</p>
 
<a name="requirements"/></a>
<h3>Requirements</h3>

<p>
  The Cactus Code is very portable.  The requirements section of the
  User's guide contains a list of the specific requirements, but
  basically, the code needs some freely available utilities (gmake,
  Perl) and an ANSI C/C++ compiler for building the flesh
  infrastructure. The core computational toolkit thorns are mainly
  written in C (with a couple of exceptions in C++).  Some application
  or example thorns also require a Fortran 90 compiler although you
  only need F77 to run the tutorial.  The drivers shipped in the
  current release use the Message Passing Interface (MPI) for
  parallelization of the code across multiple processors or machines.
  Both native and freely available (e.g. MPICH, LAM) implementations
  are supported.
</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
