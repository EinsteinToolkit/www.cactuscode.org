---
layout: default
title: GetComponents
---
Cactus applications are comprised of the Flesh and Cactus Computational
Toolkit, distributed by the Cactus team, along with thorns distributed
openly or privately by research groups around the world. Typically these
thorns are distibuted using a source code versioning system.

To faciliate assembling full Cactus applications, including associated
tools, and the sharing of configurations between colleagues, we have
revamped the Cactus language for specificing thorn locations as part of
thornlists, as well as the GetCactus tool for assembling components (now
called GetComponents).

Our new language for specifying Cactus thorns is called the Component
Retrieval Language (CRL). The CRL is independent of Cactus and can be
used to specify locations of any kinds of components. Wilth Cactus, CRL
files (thornlists) can now include the Cactus flesh, parameter files,
group configuration files, visualization tools etc.

A new script, GetComponents, has been developed to assemble components
based on a CRL file. GetComponents, while developed for Cactus use
cases, will work with any CRL file

Notable capabilities of CRL/GetComponents include

-   anonymous and authenticated access
-   support for cvs, svn, mercurial, git, darcs, http
-   mobility of CRL files, which can now be shared (authentication
    information is not stored in the CRL file itself)
-   support for multiple CRL files makes it possible to integrate shared
    and personal thornlists easily
-   component lists can be remote (URL)

More information about GetComponents is provided on its [home
page](http://eseidel.org/projects/GetComponents/), summaries relevant
for Cactus work are provided below

### GetComponents

GetComponents is available from the Cactus web page
` wget http://www.cactuscode.org/download/GetComponents chmod 755 GetComponents`

Up-to-date documentation for GetComponents can be seen by executing
`./GetComponents --man` but basically the synthax is
`GetComponents [options] [file]` or `GetComponents [options] [URL]`
where options are

|             |                                                |
|-------------|------------------------------------------------|
| −−help      | brief help message                             |
| −−man       | full documentation                             |
| −−verbose   | print all system commands as they are executed |
| −−debug     | print all commands to be executed and exit     |
| −−anonymous | use anonymous checkout for all components      |
| −−update    | process all updates                            |
| −−root      | override root directory                        |

### Component Retrieval Language (CRL)

The simplest way to understand the CRL language is too look at a good
example, e.g. the component list for the [Einstein
Toolkit](https://svn.einsteintoolkit.org/manifest/einsteintoolkit.th)
includes a range of different repositories.

Formally, the CRL file must have the following syntax:

1.  The first (non‐comment) line must be ’!CRL\_VERSION = 1.0’
2.  It will be split up in to multiple sections, with each section
    corresponding to a repository. The order of the sections is
    irrelevant.
3.  Each section will contain multiple directives beginning with a !.
    Required directives are: !TARGET, !TYPE, !URL, and !CHECKOUT.
    Optional directives are: !ANONYMOUS\_USER, !ANONYMOUS\_PASSWORD,
    !LOCAL\_PATH, !REPOSITORY\_PATH, and !AUTHORIZATION\_URL. The
    shortened directives !ANON\_USER, !ANON\_PASS, !LOC\_PATH,
    !REPO\_PATH, and !AUTH\_URL are also recognized.
4.  !TARGET MUST be the first directive for each section. It will
    specify the directory, in which the components for the current
    repository will be placed. !TARGET may contain predefined constants
    i.e. $ROOT, which could represent the root directory for all of the
    components.
5.  !TYPE specifies the tool used to checkout the components. Currently,
    cvs, svn, git, http, https, ftp, and hg (mercurial) are
    supported. 5. !URL specifies the location of the repository for
    anonymous checkout. !URL may contain variables $1, $2, etc, which
    will correspond to the directories in the path given by !CHECKOUT.
    For example, if !URL = http://svn.foo.com/$2/trunk and !CHECKOUT =
    foo/bar, !URL will be interpreted as
    http://svn.foo.com/bar/trunk. 6. !AUTH\_URL will specify a different
    location for an authenticated checkout. If both !AUTH\_URL and !URL
    are defined, !AUTH\_URL will take precedence.
6.  !CHECKOUT specifies the components to checkout from the repository.
    !CHECKOUT can contain a path through multiple directories, in which
    case they must be separated by a /. If there are multiple components
    to be checked out from a single repository, they should be separated
    by a newline. Any trailing whitespace or comments will be ignored.
7.  !NAME specifies an alternate name for the component to be checked
    out. That means that if !TARGET is foo, !CHECKOUT is bar, and !NAME
    is foobar, the resulting directory tree will be foo/foobar.
8.  !ANON\_USER and !ANON\_PASS will specify the login credentials for
    an anonymous cvs checkout from the repository.
9.  !REPO\_PATH will specify the location of the item to be checked out
    within a repository. It can consist of a file path, or $1 or $2, and
    will essentially serve as a prefix to the checkout path when the
    script is looking for the checkout item.
10. Each directive will be followed by optional whitespace, an =,
    optional whitespace, the corresponding argument, and more optional
    whitespace. The end of an argument will be indicated by the !
    preceding the next directive. The argument may be enclosed in quotes
    (\\" or\\ ’), in which case the argument will be taken literally and
    no variable substitution will occur.
11. Extra newlines may be inserted between sections for greater clarity,
    and any comments will be preceded by a \#.
12. There is an optional section that will contain any definitions i.e.
    $ROOT. These definitions will be preceded by !DEFINE, and then
    follow the syntax for the directives. Definitions may only be
    defined once.
