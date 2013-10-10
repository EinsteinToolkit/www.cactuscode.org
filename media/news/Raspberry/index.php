<?php $title='Cactus runs on Raspberry Pi';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
Cactus was ported to run on <a href="http://raspberrypi.org/">Raspberry Pis</a>.
This isn't a major accomplishment, as these little computers run
<a href="http://www.raspbian.org/">Raspbian</a>, which is nothing else than
a costumized <a href="http://www.debian.org">Debian</a>, a wide-spread and
already supported
<a href="http://en.wikipedia.org/wiki/Linux_distribution">Linux distribution</a>.
However, a few tweaks were necessary due to the uncommon architecture
(a ARMv6 32-bit core), which should be included in the next release of Cactus.
</p>

<p>
It should also be noted the goal of running on such systems is hardly speed. In
fact, a lot of modern cell phones are probably faster. However, Raspberry Pis
are cheap, and a nice tool for education. And of course it is always nice to be
able to demonstrate how portable Cactus is.
</p>

<p>
What has been demonstrated is a built of the
<a href="http://einsteintoolkit.org/about/releases/ET_2013_05_announcement.php">Gauss</a>
release of the
<a href="http://einsteintoolkit.org/">Einstein Toolkit</a>, successfully passing
all but a few test suites (apparently connected to
<a href="http://www.hdfgroup.org/HDF5/">HDF5</a> recovery in
<a href="http://www.carpetcode.org/">Carpet</a>).</p>

<p>
Building is pretty straightforward: <a href="http://simfactory.org/">Simfactory</a>
contains an optionlist <a href="https://svn.cct.lsu.edu/repos/numrel/simfactory2/trunk/mdb/optionlists/raspbian.cfg">raspbian.cfg</a>,
and also lists a couple of packages that, if installed, reduce build-time. The
only change that is necessary to build the whole Einstein Toolkit on a standard
Raspbian image (besides the neccessary packages mentioned also in the option list;
like compilers), is a larger swap space, for compilation of some file (edit
<b>/etc/dphys-swapfile</b>, I used 1GB, and then run <b>dphys-swapfile setup</b>
and <b>dphys-swapfile swapon</b>).
</p>

<h3 class="align-right">day Mon year — user posting</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
