<?php $title='Cactus runs on Raspberry Pi';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<img src="cactusraspberry.png" alt="cactusraspberry" width="50">

<p>
Cactus was ported to run on <a href="http://raspberrypi.org/">Raspberry Pis</a>.
These credit-card sized computers run
<a href="http://www.raspbian.org/">Raspbian</a>, a fork of Debian <a 
href="http://www.debian.org">Debian</a>, a wide-spread and supported
<a href="http://en.wikipedia.org/wiki/Linux_distribution">Linux 
distribution</a>.  Owing to the inherent portability of Cactus, the port to
Raspberry Pi was straightforward; however a few tweaks were necessary due to
the uncommon architecture (a ARMv6 32-bit core), which is anticipated to be
supported in the next release of Cactus.
</p>

<p>
Since Raspberry Pis are inexpensive and portable hardware, they provide convenient tools
for education. Though their clock rate is limited to a mere 700 MHz with a current
maximum supported memory of 512 MB, they nevertheless are able to support
Cactus runs for small-scale toy codes.
</p>

<p>
What has been demonstrated is a built of the
<a href="http://einsteintoolkit.org/about/releases/ET_2013_05_announcement.php">Gauss</a> release of the
<a href="http://einsteintoolkit.org/">Einstein Toolkit</a>, successfully passing
all but a few test suites (apparently connected to
<a href="http://www.hdfgroup.org/HDF5/">HDF5</a> recovery in
<a href="http://www.carpetcode.org/">Carpet</a>) on
one Raspberry Pi and a small "cluster" of two Raspberry nodes.
</p>

<p>
Building is straightforward: <a href="http://simfactory.org/">Simfactory</a>
now contains an optionlist <a 
href="https://svn.cct.lsu.edu/repos/numrel/simfactory2/trunk/mdb/optionlists/raspbian.cfg">raspbian.cfg</a>,
and lists a couple of packages which reduce built-time when installed. Aside 
from the necessary software included in this optionlist, the
only change necessary to build the Einstein Toolkit on a standard
Raspbian image is a larger swap space. For the compilation of some files, 1 GB was
used. (To extend swap space, edit <b>/etc/dphys-swapfile</b>, then run 
<b>dphys-swapfile setup</b>
followed by <b>dphys-swapfile swapon</b>).
</p>

<h3 class="align-right">10 October 2013 — knarf</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
