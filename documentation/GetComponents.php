<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title=GetComponents and CRL;
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>Cactus applications are comprised of the Flesh and Cactus
  Computational Toolkit, distributed by the Cactus team, along with
  thorns distributed openly or privately by research
  groups around the world. Typically these thorns are distibuted using
  a source code versioning system. 
</p>

<p>To faciliate assembling full Cactus applications, including
  associated tools, and the sharing of configurations between
  colleagues, we have revamped the Cactus language for specificing
  thorn locations as part of thornlists, as well as the GetCactus tool
  for assembling components (now called GetComponents).</p>

<p>Our new language for specifying Cactus thorns is called the
  Component Retrieval Language (CRL). The CRL is independent of Cactus
  and can be used to specify locations of any kinds of
  components. Wilth Cactus, CRL files (thornlists) can now include the
  Cactus flesh, parameter files, group configuration files,
  visualization tools etc.</p>

<p>A new script, GetComponents, has been developed to assemble
  components based on a CRL file. GetComponents, while developed for
  Cactus use cases, will work with any CRL file</p>

<p>Notable capabilities of CRL/GetComponents include</p>

<ul>
<li> anonymous and authenticated access
<li> support for cvs, svn, mercurial, git, darcs, http
<li> mobility of CRL files, which can now be shared (authentication
  information is not stored in the CRL file itself)
<li> support for multiple CRL files makes it possible to integrate
  shared and personal thornlists easily
<li> component lists can be remote (URL)
</ul>

<p>More information about GetComponents is provided on its <a href="http://eseidel.org/projects/getcomponents/">home page</a>,
  summaries relevant for Cactus work are provided below</p>


<h3>GetComponents</h3>

<p>GetComponents is available from the Cactus web page
<code>
wget http://www.cactuscode.org/download/GetComponents
chmod 755 GetComponents
</code>
</p>

<p>Up-to-date documentation for GetComponents can be seen by executing 
<code>./GetComponents --man</code> 
but basically the synthax is 
<code>GetComponents [options] [file]</code>
or
<code>GetComponents [options] [URL]</code>
where options are
</p>
<table>
<tr><td>       −−help  </td><td>        brief help message</td></tr>
 <tr><td>              −−man  </td><td>         full documentation</td></tr>
<tr><td>               −−verbose  </td><td>     print all system commands as they are executed</td></tr>
<tr><td>               −−debug   </td><td>      print all commands to be executed and exit</td></tr>
 <tr><td>              −−anonymous  </td><td>   use anonymous checkout for all components</td></tr>
 <tr><td>              −−update   </td><td>     process all updates</td></tr>
<tr><td>               −−root   </td><td>       override root directory</td></tr>
</table>

</p>

<h3>Component Retrieval Language (CRL)</h3>

<p>
The simplest way to understand the CRL language is too look at a good
example, e.g. the component list for the <a href="https://svn.einsteintoolkit.org/manifest/einsteintoolkit.th">Einstein
  Toolkit</a> includes a range of different repositories. 
</p>
<p>
Formally, the CRL file must have 
the following syntax:
</p>

<ol>
     <li> The first (non‐comment) line must be ’!CRL_VERSION = 1.0’

      <li> It will be split up in to multiple sections, with each section
       corresponding to a repository. The order of the sections is irrelevant.

       <li> Each section will contain multiple directives beginning with a !.
       Required directives are: !TARGET, !TYPE, !URL, and !CHECKOUT.  Optional
       directives are: !ANONYMOUS_USER, !ANONYMOUS_PASSWORD, !LOCAL_PATH,
       !REPOSITORY_PATH, and !AUTHORIZATION_URL. The shortened directives
       !ANON_USER, !ANON_PASS, !LOC_PATH, !REPO_PATH, and !AUTH_URL are also
       recognized.

        <li> !TARGET MUST be the first directive for each section. It will
       specify the directory, in which the components for the current
       repository will be placed.  !TARGET may contain predefined constants
       i.e. $ROOT, which could represent the root directory for all of the
       components.

        <li> !TYPE specifies the tool used to checkout the components. Currently,
       cvs, svn, git, http, https, ftp, and hg (mercurial) are supported.

       5. !URL specifies the location of the repository for anonymous
       checkout. !URL may contain variables $1, $2, etc, which will correspond
       to the directories in the path given by !CHECKOUT. For example, if !URL
       = http://svn.foo.com/$2/trunk and !CHECKOUT = foo/bar, !URL will be
       interpreted as http://svn.foo.com/bar/trunk.

       6. !AUTH_URL will specify a different location for an authenticated
       checkout. If both !AUTH_URL and !URL are defined, !AUTH_URL will take
       precedence.


     <li> !CHECKOUT specifies the components to checkout from the repository.
       !CHECKOUT can contain a path through multiple directories, in which
       case they must be separated by a /. If there are multiple components to
       be checked out from a single repository, they should be separated by a
       newline. Any trailing whitespace or comments will be ignored.

         <li> !NAME specifies an alternate name for the component to be checked
       out. That means that if !TARGET is foo, !CHECKOUT is bar, and !NAME is
       foobar, the resulting directory tree will be foo/foobar.

        <li> !ANON_USER and !ANON_PASS will specify the login credentials for an
       anonymous cvs checkout from the repository.

         <li> !REPO_PATH will specify the location of the item to be checked out
       within a repository. It can consist of a file path, or $1 or $2, and
       will essentially serve as a prefix to the checkout path when the script
       is looking for the checkout item.

        <li> Each directive will be followed by optional whitespace, an =,
       optional whitespace, the corresponding argument, and more optional
       whitespace. The end of an argument will be indicated by the ! preceding
       the next directive. The argument may be enclosed in quotes (\" or\ ’), in
       which case the argument will be taken literally and no variable
       substitution will occur.

         <li> Extra newlines may be inserted between sections for greater
       clarity, and any comments will be preceded by a #.

         <li> There is an optional section that will contain any definitions i.e.
       $ROOT. These definitions will be preceded by !DEFINE, and then follow
       the syntax for the directives. Definitions may only be defined once.

</ol>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
