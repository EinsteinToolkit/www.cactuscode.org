<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Bench BSSN PUGH';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='benchmarks';?>

<p>This benchmark is, together with CactusIO_FlexIO, a descendent of the oldest Cactus benchmarks.  It uses the CactusEinstein infrastructure to evolve a vacuum spacetime, using the BSSN formulation of the Einstein equations.  It employs finite differencing in space, an explicit time integration method, and relies on the
driver PUGH for distributing grid functions over processors.</p>

<p>PUGH is a mature and efficient memory management and communication driver in Cactus.  PUGH uses MPI for communication; it has been shown to scale up to thousands of processors on essentially all computing architectures that there are, from small notebooks to the worlds
largest supercomputing installations.</p>

<p>This benchmark comes in two sizes, </code>80l</kbd>
and </code>100l</kbd>, which use about 400 MB and 800 MB of main memory per CPU, and consume approximately 340.1 GFlop (8300 Flops per gridpoint) and 337.0 GFlop, respectively.  You should run both versions if you have enough memory.</p>

<p>For the interested reader, we make the two parameter files and the thorn list here available.</p>

<ul>
  <li><a href="Bench_BSSN_PUGH_80l.par">Bench_BSSN_PUGH_80l.par</a></li>
  <li><a href="Bench_BSSN_PUGH_100l.par">Bench_BSSN_PUGH_100l.par</a></li>
  <li><a href="Bench_BSSN_PUGH.thornlist">Bench_BSSN_PUGH.thornlist</a></li>
</ul>

<p>
These files are also contained in the benchmark's tarball.
</p>

<ul>
  <li><a href="Bench_BSSN_PUGH.tar.gz">Bench_BSSN_PUGH.tar.gz</a></li>
</ul>

<p>
For an overview of the commands on how to download, compile and run the benchmark see <a href="/community/benchmarks/tutorial">Downloading and building the benchmark tarballs</a>.
</p>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
