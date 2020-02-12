---
layout: default
title: Cactus Tutorial for TeraGrid 2009
---
### Tutorial materials:

-   [Presentation
    (pdf)](http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/introduction.pdf)
-   Getting all necessary configuration files from SVN repository:
    `svn co https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc`
-   [HelloWorld
    thorn](http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/arrangements/Introduction/HelloWorld)
-   [WaveToy
    thorn](http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/arrangements/Introduction/WaveToy)
-   Thorn list:
    [Thorns.th](http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/Thorns.th)
-   Configuration options:
    [queenbee.config](https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.config)
-   PBS job submission script:
    [queenbee.qsub](https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.qsub)

### Compiling Cactus on **Queen Bee**

#### Tutorial accounts:

-   Temporary accounts for this tutorial will be hosted on **Queen Bee**
    ([`queenbee.loni.org`](http://www.loni.org/systems/system.php?system=QueenBee)),
    a large supercomputer on [LONI](http://www.loni.org) optical
    network. It is a 50.7 TFlops Peak Performance, 668 compute node
    cluster running Red Hat Enterprise Linux version 4 operating system.
    Each node contains dual Quad Core Xeon 64-bit processors operating
    at a core frequency of 2.33 GHz.
-   Account usernames: **train01** - **train20**. Login to Queen Bee
    using **`ssh`**:
    ` ssh train01@queenbee.loni.org   # substitute 'train01' with your username Password:                       # enter "*******"  `

#### Downloading Cactus:

-   Download the [GetCactus](/download/GetCactus) script to your home
    directory. Make it executable:
    ` cd ~ wget http://www.cactuscode.org/download/GetCactus chmod +x GetCactus  `
-   Download configuration files from SVN repository. The following
    command will create a directory **misc** and place all necessary
    installation scripts, configuration files, thornlists and parameter
    files to this directory.
    ` cd ~ svn co https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc  `
-   Download the Cactus thornlist for this tutorial:
    [Thorns.th](https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/Thorns.th).
    Check out the Cactus flesh and arrangements:
    ` ./GetCactus -repository=development ~/misc/Thorns.th` The script
    will prompt you a few questions. Simply hit \<ENTER\> to accept
    default options.
-   Additional information on ways to obtain Cactus and associated
    arrangements are described on the [Downloads](/download/) section of
    this website.

#### Compiling Cactus:

Make sure you have configuration options file
[queenbee.config](https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.config)
in \$HOME/misc directory.

Create and compile cactus configuration **WaveToy**.
` cd ~/Cactus gmake wavetoy-config THORNLIST=~/misc/Thorns.th options=~/misc/queenbee.config gmake -j10 wavetoy`

(optional) Check the compiled executable with **`--help`** on head node:
`  `{mpirun="" -np="" 1="" -machinefile="" &lt;(echo="" localhost)=""
~="" cactus="" exe="" cactus_wavetoy="" --help="" <="" code=""}

#### Running Cactus simulations:

-   Have your [parameter
    file](http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/WaveToy.par)
    and [PBS job submission
    script](http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.qsub)
    in your \$HOME/misc directory.
-   Submit your job: `qsub ~/misc/queenbee.qsub `
-   Now you can monitor your job status using the **qstat** command.
    [Here](http://www.teragrid.org/userinfo/jobs/pbs.php) you can find
    more information about **qstat** and other PBS tools.
-   The output data that your simulation is producing is located in
    \$HOME/simulations/WaveToy. You can examine it while the job is
    running.
-   (optional) Once the job has started, it announces itself on
    [twitter.com](http://twitter.com/numrel), where it prints a
    temporary link to the simulation webpage. Follow the link to see
    various simulation parameters and control options.
-   (optional) In order to examine standard output or standard error
    while the job is running, you will need to ssh to the job\'s root
    node and check its temporary files in **/var/spool/torque/spool:**
    ` qstat -u <USER>                         # lists all jobs for a user <USER> qstat -f <JOB-NUMBER> | grep exec_host;  # gives you first line in the list of nodes  ssh <ROOT-NODE> -x less /var/spool/torque/spool/<JOB-NUMBER>.qb2.OU  # standard output of your job ssh <ROOT-NODE> -x less /var/spool/torque/spool/<JOB-NUMBER>.qb2.ER  # standard error   `
-   You can delete (abort) your job using **qdel** command.

### Visualizing the output:

#### Using **gnuplot** for 1D and 2D output

[gnuplot](http://www.gnuplot.info/) is a powerful command-line
interactive tool for scientific plotting. You can learn more about
gnuplot [here]() and
[here](http://t16web.lanl.gov/Kawano/gnuplot/index-e.html).

-   The WaveToy simulation produced output of 1D cuts along the X-, Y-
    and Z-directions for variable phi. The files with this data can be
    found in \$HOME/simulations/WaveToy directory.
-   Change to the simulation data directory and start gnuplot:
    ` cd ~/simulations/WaveToy gnuplot `
-   Try various 1D and 2D plots:
    ` gnuplot> plot "phi.x.asc" using 10:13 index 0 with linespoints # 1D cut along the X axis, t=0 gnuplot> p "phi.y.asc" u 11:13 i 0:10 w lp                     # 1D cut along the diagonal, t=0..30 gnuplot> sp "phi.x.asc" u 9:10:13 i 0:20 w l                   # 2D plot in (t,x,phi) space `
-   One of the powerful features of Cactus IO thorns is the ability to
    perform various grid function reductions for parallel runs. To
    compute an average, maximum and minimum values of the grid function
    phi, add the following lines to WaveToy.par and resubmit your job:
    ` ActiveThorns = "CarpetIOScalar" IOScalar::outscalar_every    = 10 IOScalar::outscalar_vars     = "wavetoy_simple::phi" IOScalar::outscalar_reductions = "average minimum maximum"`
    Try to modify the output frequency or grid resolution to get beter
    plots.
-   Visualise these integral quantities with gnuplot:
    ` gnuplot> p "phi.minimum.asc" u 2:3 w l gnuplot> p "phi.maximum.asc" u 2:3 w l gnuplot> p "phi.average.asc" u 2:3 w l`

#### Remote visualisation of 3D HDF5 output with VisIt

-   Download and install VisIt version 1.11.x on your laptop, as
    described on the [VisIt
    website](https://wci.llnl.gov/codes/visit/executables.html).
-   To enable remote visualization, you will need to add Queen Bee to
    the list of host profiles. This procedure for using GUI interface
    for a generic machine is described
    [here](/documentation/guides/visualization/VisIt).
-   On Linux or Mac, you can also simply edit file **\~/.visit/config**
    by adding the following lines to host profiles section of XML
    (replace **train01** with your username):
    ` <Object name="HostProfile">     <Field name="profileName" type="string">serial</Field>     <Field name="host" type="string">queenbee.loni.org</Field>     <Field name="userName" type="string">train01</Field>     <Field name="profileName" type="string">serial</Field>     <Field name="active" type="bool">true</Field>     <Field name="arguments" type="stringVector">"-dir" "/home/ebentive/VisIt/1.11.2" </Field>     <Field name="hostAliases" type="string">queenbee.loni.org qb4.loni.org qb3.loni.org qb4 qb3</Field>     <Field name="tunnelSSH" type="bool">true</Field> </Object> `
    If the file **\~/.visit/config** doesn\'t exist, simply run VisIt
    once to have VisIt create it for you.
-   Start VisIt on your laptop by typing
    `visit -debug 5 &   # let's run it with debugging output in case things go wrong `
-   Go to \"File \> Open file\", select \"Host\" =
    \"queenbee.loni.org\". Enter your password to connect to Queen Bee.
    Establishing connection might take a while.
-   Select path /scratch/\<USERNAME\>/simulations/WaveToy. Select file
    **phi.h5**.
-   Now you can visualize your data (e.g. the wave function phi) with
    VisIt using different visualization plotting types and operators.
    For instance, you might want to try Pseudocolor plot + a Slice
    operator.
