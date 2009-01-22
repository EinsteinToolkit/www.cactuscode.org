<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Download Cactus';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h2>License</h2>

<p>
  The Cactus Code is (C) Copyrighted by the individual Authors and
  distributed under
  the <a href="http://www.gnu.org/copyleft/gpl.html">GNU public
  license</a>.  Most of the computational packages that come with it
  follow this license but the authors of any thorn are free to follow
  any licensing they deem appropriate as long as they state it
  explicitly in their thorn distribution.
</p>



<h2>Getting the Code</h2>

<p>
  Cactus is maintained using CVS (Concurrent Versioning System).  The
  preferred method is to use the <kbd>GetCactus</kbd> script along
  with a ThornList as described below. We maintain
  a <a href="../Toolkit/thornlists/document_view">page of basic
  thornlists</a>, or you can use your own customized thornlist.
</p>

<p>
  Save the <a href="../download/GetCactus">checkout script</a> with
  the name <kbd>GetCactus</kbd>.
</p>

<p>
  To checkout the flesh only (compiling the flesh alone will not allow
  you to run any applications) type the below and follow the
  instructions
</p>

<pre>./GetCactus</pre>

<code>./GetCactus</code>

<p>
  To checkout an application version of Cactus, choose and save
  a <a href="../Toolkit/thornlists">ThornList</a>, or provide one to
  your own needs, and issue the command:
</p>

<p>
  Please note, that for the <kbd>GetCactus</kbd> script, you should
  not issue the perl command, but rather just execute the file
</p>

<pre>./GetCactus &lt;<var>thornlist-name</var>&gt;</pre>

<p>
  To add more Thorns to your Cactus, either use
  the <kbd>GetCactus</kbd> script with a new Thorn List, or use the
  below make target from within the Cactus distribution.
  (Using <kbd>GetCactus</kbd> is preferred).
</p>

<pre>gmake checkout</pre>



<h2>CVS Repositories</h2>

<p>
  The main Cactus CVS Server (<kbd>cvs.cactuscode.org</kbd>) hosts
  several different repositories
  (explained <a href="../Documentation/CactusRepositories-HOWTO">CactusRepositories-HOWTO</a>),
  including different repositories for the stable and development
  versions of Cactus.
</p>

<p>
  To checkout flesh and Thorns for the stable release, move to the
  directory where the Cactus installation should be made: (for the
  latest development version use <kbd>/cactusdevcvs</kbd> instead of
  <kbd>/cactus</kbd> everywhere below)
</p>

<p>
  Login to the CVS server, the <kbd>&lt;<var>user
      name</var>&gt;</kbd> is <kbd>cvs_anon</kbd> and the password
      is <kbd>anon</kbd> (unless you have a CVS account on our
      server in which case you can alternatively use your own username
      and password).
</p>

<pre>cvs -d :pserver:&lt;<var>user name</var>&gt;@cvs.cactuscode.org:/cactus login</pre>

<p>
  Checkout the Cactus flesh
</p>

<pre>cvs -d :pserver:&lt;<var>user name</var>&gt;@cvs.cactuscode.org:/cactus co Cactus</pre>

<p>
  Move to the arrangements directory of the Cactus installation and
  install the required arrangements and thorns.
</p>

<pre>cd Cactus/arrangements</pre>

<p>
  If you are using thorns other than those in the standard Cactus
  distributions you will need to know the details for downloading or
  checking them out. Here we just describe checking out from the
  Cactus distribution.
</p>

<p>
  To checkout complete arrangements (e.g. see our standard
  <a href="../Toolkit/thornlists">ThornLists</a>)
</p>
 /
<pre>cvs -d :pserver:&lt;<var>user name</var>&gt;@cvs.cactuscode.org:/cactus checkout &lt;<var>arrangement</var>&gt;</pre>

<p>
  To checkout individual thorns (e.g. see our
  standard <a href="../Toolkit/thornlists">ThornLists</a>)
</p>

<pre>cvs -d :pserver:&lt;<var>user name</var>&gt;@cvs.cactuscode.org:/cactus checkout &lt;<var>arrangement</var>&gt;/&lt;<var>thorn</var>&gt;</pre>



<h2>Download Tar Files</h2>

<p>
  If you don't have a CVS client, use
  our <a href="http://www.cactuscode.org/cactus_cgi-bin/download.pl">Web
  Form Interface</a> to download a tar file.
</p>

<a name="requirements"></a>



<h2>Requirements</h2>

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
