<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Bench Whisky Carpet';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='benchmarks';?>

<p>This benchmark is similar to Bench_BSSN_Carpet, but it solves the relativistic Euler equations in addition to the Einstein equations.
This requires more memory and more floating point operations per grid point.  The relativistic Euler equations are implemented in the Whisky code.  You find more information on Whisky on its <a href="http://www.whiskycode.org/">web pages</a>.</p>

<p>This benchmark comes in two sizes, <kbd>36l</kbd>
and <kbd>48l</kbd>, which use about 400 MB and 800 MB of main memory per CPU, and consume approximately 265.9 GFlop and 312.8 GFlop, respectively.  You should run both sizes if you have enough memory.</p>

<p>For the interested reader, we make the two parameter files and the thorn list here available. </p>

<ul>
  <li><a href="Bench_Whisky_Carpet_36l.par">Bench_Whisky_Carpet_36l.par</a></li>
  <li><a href="Bench_Whisky_Carpet_48l.par">Bench_Whisky_Carpet_48l.par</a></li>
  <li><a href="Bench_Whisky_Carpet.thornlist">Bench_Whisky_Carpet.thornlist</a></li>
</ul>
<p>
 These files are also contained in the benchmark's tarball.
<p>

<ul>
  <li><a href="Bench_Whisky_Carpet.tar.gz">Bench_Whisky_Carpet.tar.gz</a></li>
</ul>

<p>
For an overview of the commands on how to download, compile and run the benchmark see <a href="/community/benchmarks/tutorial">Downloading and building the benchmark tarballs</a>.
</p>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
