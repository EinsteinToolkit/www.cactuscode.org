<?php $title='Cactus Repositories - HOWTO';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>
CactusRepositories-HOWTO<br />
Gabrielle Allen<br />
</p>

<p>This HOWTO is written to explain the organisation of the CVS 
repositories which are maintained by the Cactus Team at 
cvs.cactuscode.org. Please help us to keep this documentation
complete and up-to-date by sending complaints, suggestions and 
errata to the Cactus Team at cactusmaint@cactuscode.org </p>


<h2>Introduction</h2>

<p>The Cactus Team maintains a number of CVS repositories on the CVS
server at cvs.cactuscode.org. We have multiple repositories to 
help organise the different categories of thorns, and because we 
choose to work with different repositories for the stable and 
development version of the distributed code.</p>

<h2>Permissions</h2>

<p>The Cactus repositories all use logins and passwords, which allows us
to add checkout and/or commit priviledges on a user basis for different
modules. If a module is publically available, it can always be checked
out by the anonymous user:</p>

<pre>
   username: cvs_anon
   password: anon
</pre>

<p>If you think you need a username and password to allow you access to
checkout or commit to private modules in the Cactus repositories, 
apply to </p>

<pre>
   cactusmaint@cactuscode.org
</pre>

<p>In addition you should have the author of the module (if not a member of
the Cactus team), email us to confirm their permission.</p>


<h2>Repositories</h2>

<p>The repositories maintained at cvs.cactuscode.org are</p>

<ul>
<li>
<span class='blit'>/cactus</span>
        The current stable (last released) version of the Cactus
		span, and released arrangements (including the Computational 
                Toolkit, and the Einstein Toolkit). 

                This repository also holds archived versions of all 
	        past releases of the flesh and thorns.</li>

<li>
<span class='blit'>/cactusdevcvs</span>
    The development version of the Cactus span, the Cactus
		Computational Toolkit and the Cactus Einstein Toolkit</li>

<li>
<span class='blit'>/arrangements</span>
   Private thorn arrangements, hosted on our CVS server </li>

<li>
<span class='blit'>/packages</span>
    External packages which are needed for some thorns (e.g.
		FlexIO, Jpeg). Note that we are currently updating our
		procedures for dealing with external packages to provide
		the possibility for easily linking to packages compiled
        outside of Cactus.</li>
</ul>


<h2>Using a Repository</h2>

<p>Instructions for using CVS can be found by looking at the man pages 
for cvs, or by obtaining the CVS documentation from www.cvshome.org</p>

<p>Only an initial guide is provided here</p>

<ol>
<li>Login to repository

<pre>
   cvs -d :pserver:&lt;username&gt;@cvs.cactuscode.org:&lt;repository name&gt; login
</pre></li>

<li>List publically available modules

<pre>
   cvs -d :pserver:&lt;username&gt;@cvs.cactuscode.org:&lt;repository name&gt; checkout -s
</pre></li>

<li>
Checkout a module (into current directory)

<pre>
   cvs -d :pserver:&lt;username&gt;@cvs.cactuscode.org:&lt;repository name&gt; \
        checkout &lt;module name&gt;
</pre>
  
<li>Update modules in current directory recursively (-d means get new
   directories)

<pre>
   cvs update -d
</pre>
</li>
</ol>

<h2>The Development Repository</h2>

<p>
To manage working with both a stable and development version of the
Cactus Code and Toolkits, we use two repositories (an alternative method
would have been to use branches in CVS, but for various reasons we 
decided against this for now). The stable version is kept in the /cactus
repository, and this is frozen, that is no changes are allowed to be 
committed. The development version contains bug fixes, and ongoing 
development work. While we try to keep everything working, occasionally
there will be problems with thorns not compiling on all architectures, 
or interfaces changing. We suggest that you work with the stable version
if possible, and that if you need to use the development version that you
use everything from the development version. That is, we advise against
mixing development and stable versions of the Flesh or Thorns.
</p>

<p>
IMPORTANT: As is obvious from the name, the development version is the
version of Cactus which is being actively developed. This means that
it could be changing from day to day. If you are using the development
version you should be prepared to monitor CVS messages detailing changes
to flesh and thorns, and update your installation as necessary.
</p>


<h2>Your Thorns</h2>

<p>
We would encourage thorn authors to make their thorns available from their
own CVS repositories. Our checkout scripts contain mechanisms for obtaining
thorns from a general CVS repository. If you would like information on 
setting up a CVS repository on a local machine, check the CVS documentation
which you can find at
</p>

<pre>
	www.cvshome.org
</pre>

<p>
If you need more help, contact cactusmaint@cactuscode.org, we can't promise
that we will have time to help, but we can give you some pointers, and 
we have some documentation for creating CVS repositories.
</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
