<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Cactus Tutorial for TeraGrid 2009';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h3>Tutorial materials:</h3>

<ul>
  <li><a href="http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/introduction.pdf">Presentation (pdf)</a></li>
  <li>Getting all necessary configuration files from SVN repository: 
    <code>svn co https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc</code>
  </li>
  <li><a href="http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/arrangements/Introduction/HelloWorld">HelloWorld thorn</a></li>
  <li><a href="http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/arrangements/Introduction/WaveToy">WaveToy thorn</a></li>
  <li>Thorn list: <a href="http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/Thorns.th">Thorns.th</a></li>
  <li>Configuration options: <a href="https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.config">queenbee.config</a></li>
  <li>PBS job submission script: <a href="https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.qsub">queenbee.qsub</a></li>
</ul>

<h3>Compiling Cactus on <strong>Queen Bee</strong></h3>

<h4>Tutorial accounts:</h4>
<ul>
  <li>Temporary accounts for this tutorial will be hosted on <strong>Queen Bee</strong> (<a href="http://www.loni.org/systems/system.php?system=QueenBee"><tt>queenbee.loni.org</tt></a>), a large supercomputer on 
<a href="http://www.loni.org">LONI</a> optical network. It is a 50.7 TFlops Peak Performance, 668 compute node cluster running Red Hat Enterprise Linux version 4 operating system. Each node contains dual Quad Core Xeon 64-bit processors operating at a core frequency of 2.33 GHz.</li>
  <li>Account usernames: <strong>train01</strong> - <strong>train20</strong>. Login to Queen Bee using <strong><tt>ssh</tt></strong>:
  <code>
ssh train01@queenbee.loni.org   # substitute 'train01' with your username
Password:                       # enter "*******"  </code></li>
</ul>

<h4>Downloading Cactus:</h4>
<ul>
  <li>Download the <a href="/download/GetCactus">GetCactus</a> script to your home directory. Make it executable:
  <code>
cd ~
wget http://www.cactuscode.org/download/GetCactus
chmod +x GetCactus  </code></li>
  <li>Download configuration files from SVN repository. The following command will create a directory <strong>misc</strong> and place all necessary installation scripts, configuration files, thornlists and parameter files to this directory.
  <code>
cd ~
svn co https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc  </code></li>
  <li>Download the Cactus thornlist for this tutorial: <a href="https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/Thorns.th">Thorns.th</a>. Check out the Cactus flesh and arrangements:
  <code>
./GetCactus -repository=development ~/misc/Thorns.th</code>
  The script will prompt you a few questions. Simply hit &lt;ENTER&gt; to accept default options.
  </li>
  <li>Additional information on ways to obtain Cactus and associated arrangements are described on the <a href="/download/">Downloads</a> section of this website.</li>
</ul>

<h4>Compiling Cactus:</h4>
<ul>
  <li>Make sure you have configuration options file <a href="https://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.config">queenbee.config</a> in $HOME/misc directory.
  <li>Create and compile cactus configuration <strong>WaveToy</strong>.
  <code>
cd ~/Cactus
gmake wavetoy-config THORNLIST=~/misc/Thorns.th options=~/misc/queenbee.config
gmake -j10 wavetoy</code></li>
  <li>(optional) Check the compiled executable with <strong><tt>--help</tt></strong> on head node:
  <code
mpirun -np 1 -machinefile &lt;(echo localhost) ~/Cactus/exe/cactus_wavetoy --help </code></li>
</ul>

<h4>Running Cactus simulations:</h4>
<ul>
  <li>Have your <a href="http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/WaveToy.par">parameter file</a> and <a href="http://svn.cct.lsu.edu/repos/cactus/tutorials/introduction/examples/Cactus/misc/queenbee.qsub">PBS job submission script</a> in your $HOME/misc directory.</li>
  <li>Submit your job: 
  <code>qsub ~/misc/queenbee.qsub </code></li>
  <li>Now you can monitor your job status using the <strong>qstat</strong> command. <a href="http://www.teragrid.org/userinfo/jobs/pbs.php">Here</a> you can find more information about <strong>qstat</strong> and other PBS tools.</li>
  <li>The output data that your simulation is producing is located in $HOME/simulations/WaveToy. You can examine it while the job is running.
  <li>(optional) Once the job has started, it announces itself on <a href="http://twitter.com/numrel">twitter.com</a>, where it prints a temporary link to the simulation webpage. Follow the link to see various simulation parameters and control options. 
  <li>(optional) In order to examine standard output or standard error while the job is running, you will need to ssh to the job's root node and check its temporary files in <strong>/var/spool/torque/spool:</strong>
  <code>
qstat -u &lt;USER&gt;                         # lists all jobs for a user &lt;USER&gt;
qstat -f &lt;JOB-NUMBER&gt | grep exec_host;  # gives you first line in the list of nodes <JOB-NUMBER>
ssh &lt;ROOT-NODE&gt; -x less /var/spool/torque/spool/&lt;JOB-NUMBER&gt;.qb2.OU  # standard output of your job
ssh &lt;ROOT-NODE&gt; -x less /var/spool/torque/spool/&lt;JOB-NUMBER&gt;.qb2.ER  # standard error
  </code>
  </li>
  <li>You can delete (abort) your job using <strong>qdel</strong> command.</li>
</ul>

<h3>Visualizing the output</strong></tt>:</h3>

<h4>Using <strong>gnuplot</strong> for 1D and 2D output</h4>

<a href="http://www.gnuplot.info/">gnuplot</a> is a powerful command-line interactive tool for scientific plotting. You can learn more about gnuplot <a href="">here</a> and <a href="http://t16web.lanl.gov/Kawano/gnuplot/index-e.html">here</a>.
<ul>
  <li>The WaveToy simulation produced output of 1D cuts along the X-, Y- and Z-directions for variable <it>phi</it>. The files with this data can be found in $HOME/simulations/WaveToy directory.</li>
  <li>Change to the simulation data directory and start gnuplot:
<code>
cd ~/simulations/WaveToy
gnuplot </code></li>
  <li>Try various 1D and 2D plots:
<code>
gnuplot> plot "phi.x.asc" using 10:13 index 0 with linespoints # 1D cut along the X axis, t=0
gnuplot> p "phi.y.asc" u 11:13 i 0:10 w lp                     # 1D cut along the diagonal, t=0..30
gnuplot> sp "phi.x.asc" u 9:10:13 i 0:20 w l                   # 2D plot in (t,x,phi) space </code></li>
  <li>One of the powerful features of Cactus IO thorns is the ability to perform various grid function reductions for parallel runs. To compute an average, maximum and minimum values of the grid function <it>phi</it>, add the following lines to WaveToy.par and resubmit your job:
<code>
ActiveThorns = "CarpetIOScalar"
IOScalar::outscalar_every    = 10
IOScalar::outscalar_vars     = "wavetoy_simple::phi"
IOScalar::outscalar_reductions = "average minimum maximum"
</code>
Try to modify the output frequency or grid resolution to get beter plots.
</li>
  <li>Visualise these integral quantities with gnuplot:
<code>
gnuplot> p "phi.minimum.asc" u 2:3 w l
gnuplot> p "phi.maximum.asc" u 2:3 w l
gnuplot> p "phi.average.asc" u 2:3 w l
</code></li>
</ul>

<h4>Remote visualisation of 3D HDF5 output with VisIt</h4>
<ul>
  <li>Download and install VisIt version 1.11.x on your laptop, as described on the <a href="https://wci.llnl.gov/codes/visit/executables.html">VisIt website</a>.</li>
  <li>To enable remote visualization, you will need to add Queen Bee to the list of host profiles. This procedure for using GUI interface for a generic machine is described <a href="/documentation/guides/visualization/VisIt">here</a>.</li> 
  <li>On Linux or Mac, you can also simply edit file <strong>~/.visit/config</strong> by adding the following lines to host profiles section of XML (replace <strong>train01</strong> with your username):
<code>
&lt;Object name="HostProfile"&gt;
    &lt;Field name="profileName" type="string"&gt;serial&lt;/Field&gt;
    &lt;Field name="host" type="string"&gt;queenbee.loni.org&lt;/Field&gt;
    &lt;Field name="userName" type="string"&gt;train01&lt;/Field&gt;
    &lt;Field name="profileName" type="string"&gt;serial&lt;/Field&gt;
    &lt;Field name="active" type="bool"&gt;true&lt;/Field&gt;
    &lt;Field name="arguments" type="stringVector"&gt;"-dir" "/home/ebentive/VisIt/1.11.2" &lt;/Field&gt;
    &lt;Field name="hostAliases" type="string"&gt;queenbee.loni.org qb4.loni.org qb3.loni.org qb4 qb3&lt;/Field&gt;
    &lt;Field name="tunnelSSH" type="bool"&gt;true&lt;/Field&gt;
&lt;/Object&gt; </code>
If the file <strong>~/.visit/config</strong> doesn't exist, simply run VisIt once to have VisIt create it for you.
<li>Start VisIt on your laptop by typing 
<code>visit -debug 5 &   # let's run it with debugging output in case things go wrong </code></li>
<li>Go to "File &gt; Open file", select "Host" = "queenbee.loni.org". Enter your password to connect to Queen Bee. Establishing connection might take a while. </li>
<li>Select path /scratch/&lt;USERNAME&gt;/simulations/WaveToy. Select file <strong>phi.h5</strong>.
<li>Now you can visualize your data (e.g. the wave function phi) with VisIt using different visualization plotting types and operators. For instance, you might want to try Pseudocolor plot + a Slice operator.
</ul>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
