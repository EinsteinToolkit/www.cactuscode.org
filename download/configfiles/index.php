<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Configuration Files';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<h2>Supported Architectures (With Example Systems)</h2>

<!-- Please keep the list below sorted first by architecture, then by
     machine name.  The comments in front of every entry refer to the
     SimFactory machine name.  Thank you.  -->

<table>
  
  <tr>
    <th>Machine</th>
    <th>Option List</th>
    <th>Script File Template</th>
    <th>Location</th>
    <th>Architecture</th>
  </tr>
  
  
  
  <!-- Linux Clusters -->
  
  <!-- abe-mvapich2 -->
  <tr>
    <td><a href="http://www.ncsa.uiuc.edu/UserInfo/Resources/Hardware/Intel64Cluster/">Abe</td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/abe-mvapich2.cfg">abe-mvapich2</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/abe-mvapich2.sh">abe-mvapich2</td>
    <td>NCSA</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
  </tr>
  
  <!-- damiana -->
  <tr>
    <td><a href="http://supercomputers.aei.mpg.de">Damiana</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/damiana.cfg">damiana</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/damiana.sh">damiana</td>
    <td>AEI</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
  </tr>
  
  <!-- eric-mvapich2 -->
  <tr>
    <td><a href="http://www.loni.org/systems/system.php?system=Eric">Eric</a>,
      <a href="http://www.loni.org/systems/system.php?system=Louie">Louie</a>,
      <a href="http://www.loni.org/systems/system.php?system=Oliver">Oliver</a>,
      <a href="http://www.loni.org/systems/system.php?system=Poseidon">Poseidon</a>,
      <a href="http://www.loni.org/systems/system.php?system=QueenBee">Queen
        Bee</a>, <a href="http://www.hpc.lsu.edu/systems/system.php?system=Tezpur">Tezpur</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/eric-mvapich2.cfg">eric-mvapich2</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/eric-mvapich2.sh">eric-mvapich2</td>
    <td>LONI, LSU</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
  </tr>
  
  <!-- lonestar -->
  <tr>
    <td><a href="http://www.tacc.utexas.edu/services/userguides/lonestar/">Lonestar</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/lonestar.cfg">lonestar</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/lonestar.sh">lonestar</a></td>
    <td>TACC</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
  </tr>
  
    <!-- philip -->
<tr>
    <td><a href="http://www.hpc.lsu.edu/systems/system.php?system=Philip">Philip</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/philip-mpich.cfg">philip-mpich</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/philip-mpich.sh">philip-mpich</a></td>
    <td>LSU</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
  </tr>
  
  <!-- ranger -->
  <tr>
    <td><a href="http://www.tacc.utexas.edu/services/userguides/ranger/">Ranger</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/ranger-mvapich.cfg">ranger-mvapich</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/ranger-mvapich.sh">ranger-mvapich</a></td>
    <td>TACC</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a> Clusters</td>
  </tr>
  
  
  
  <!-- Cray XT4 -->
  
  <!-- franklin -->
  <tr>
    <td><a href="http://www.nersc.gov/nusers/systems/franklin/">Franklin</a>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/franklin.cfg">franklin</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/franklin.sh">franklin</a></td>
    <td>NERSC</td>
    <td><a href="http://en.wikipedia.org/wiki/Cray_XT4">Cray XT4</a>
      (CNL)</td>
  </tr>
  
  
  
  <!-- Cray XT5 -->
  
  <!-- kraken -->
  <tr>
    <td><a href="http://www.nics.tennessee.edu/computing-resources/kraken">Kraken</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/kraken.cfg">kraken</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/kraken.sh">kraken</a></td>
    <td>NICS</td>
    <td><a href="http://en.wikipedia.org/wiki/Cray_XT5">Cray XT5</a>
      (CNL)</td>
  </tr>
  
  
  
  <!-- IBM Blue Gene -->
  
  <!-- Surveyor -->
  <tr>
    <td><a href="http://www.alcf.anl.gov/resources/storage.php">Surveyor</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/intrepid-xlc.cfg">surveyor</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/intrepid-xlc.sh">surveyor</a></td>
    <td>ALCF</td>
    <td><a href="http://en.wikipedia.org/wiki/Blue_Gene">IBM Blue
        Gene/P</a> (Linux)</td>
  </tr>
  
  
  
  <!-- IBM p5 -->
  
  <!-- ducky -->
  <tr>
    <td><a href="http://www.loni.org/systems/system.php?system=Bluedawg">Bluedawg</a>,
      <a href="http://www.loni.org/systems/system.php?system=Ducky">Ducky</a>,
      <a href="http://www.loni.org/systems/system.php?system=LaCumba">LaCumba</a>,
      <a href="http://www.loni.org/systems/system.php?system=Neptune">Neptune</a>,
      <a href="http://www.loni.org/systems/system.php?system=Zeke">Zeke</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/ducky.cfg">ducky</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/ducky.sh">ducky</a></td>
    <td>LONI</td>
    <td><a href="http://en.wikipedia.org/wiki/IBM_System_p">IBM p5</a>
      (AIX)</td>
  </tr>
  
  <!-- pelican -->
  <tr>
    <td><a href="http://www.hpc.lsu.edu/systems/system.php?system=Pelican">Pelican</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/pelican.cfg">pelican</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/pelican.sh">pelican</a></td>
    <td>LSU</td>
    <td><a href="http://en.wikipedia.org/wiki/IBM_System_p">IBM p5</a>
      (AIX)</td>
  </tr>
  
  
  
  <!-- SGI Altix -->
  
  <!-- hlrb2 -->
  <tr>
    <td><a href="http://www.lrz-muenchen.de/services/compute/hlrb/">HLRB
        II</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/hlrb2.cfg">hlrb2</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/hlrb2.sh">hlrb2</a></td>
    <td>LRZ</td>
    <td><a href="http://en.wikipedia.org/wiki/Altix">SGI Altix</a></td>
  </tr>
  
  <!-- santaka -->
  <tr>
    <td><a href="http://www.hpc.lsu.edu/systems/system.php?system=Santaka">Santaka</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/santaka.cfg">santaka</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/santaka.sh">santaka</a></td>
    <td>LSU</td>
    <td><a href="http://en.wikipedia.org/wiki/Altix">SGI Altix</a></td>
  </tr>
  
  
  
  <!-- SiCortex -->
  
  <!-- sicortex -->
  <tr>
    <td><a href="http://sicortex.com/">SiCortex</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/sicortex.cfg">sicortex</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/sicortex.sh">sicortex</a></td>
    <td>Houston</td>
    <td>SiCortex (Linux)</td>
  </tr>
  
  
  
  <!-- Laptops, Workstations -->
  
  <!-- numrel02 -->
  <tr>
    <td><a href="http://www.cct.lsu.edu/">numrel02</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/numrel-intel.cfg">numrel-intel</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/numrel-intel.sh">numrel-intel</a></td>
    <td>CCT, Linux workstation</td>
    <td><a href="http://en.wikipedia.org/wiki/Linux">Linux</a>
      Laptops/Workstations</td>
  </tr>
  
  <!-- redshift -->
  <tr>
    <td><a href="http://www.cct.lsu.edu/">Redshift</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/optionlists/redshift-gcc.cfg">redshift-gcc</a></td>
    <td><a href="https://svn.cct.lsu.edu/repos/numrel/simfactory/scriptfiles/redshift-gcc.sh">redshift-gcc</a></td>
    <td>CCT, Mac OS X laptop</td>
    <td><a href="http://en.wikipedia.org/wiki/Mac_OS_X">Mac OS X</a>
      Laptops/Workstations</td>
  </tr>
  
</table>



<h2>Supported Compilers</h2>

<p>
  Different system architectures support various compilers.  Usually,
  each system has a preferred compiler.
</p>

<ul>
  <li><a href="http://gcc.gnu.org/">GCC</a> (gcc, g++, gfortran)</li>
  <li><a href="http://www.ibm.com/software/awdtools/xlcpp/">IBM</a>
    (xlc, xlC, xlf, xlf90)</li>
  <li><a href="http://www.intel.com/cd/software/products/asmo-na/eng/compilers/">Intel</a>
  (icc, icpc, ifort)</li>
  <li><a href="http://www.pathscale.com/">PathScale</a> (pathcc,
    pathCC, pathf95)</li>
  <li><a href="http://www.pgroup.com/">PGI</a> (pgcc, pgCC, pgf,
    pgf90)</li>
</ul>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
