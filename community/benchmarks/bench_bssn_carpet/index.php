<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Bench BSSN Carpet';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='benchmarks';?>

<p>This benchmark is similar to Bench_BSSN_PUGH, but it uses mesh refinement instead of a uniform grid.  It also uses the driver Carpet instead of PUGH.  You find more information about Carpet on its <a href="http://www.carpetcode.org/">web page</a>.  Carpet is still under development.  It scales up to about 100 processors.</p>

<p>This benchmark comes in two configurations, <kbd>1lev</kbd> and <kbd>3lev</kbd>.  The first is a unigrid configuration, which should in an ideal world show the same performance characteristics as PUGH.  The second is a mesh refinement configuration, which requires more commBunication for the same number of grid points.  In return, there is more spatial and temporal
resolution.  You should run both configurations.</p>

<p>Each configuration comes in two sizes: <kbd>1lev_60l</kbd> and <kbd>3lev_32l</kbd> use about 400 MB, and <kbd>1lev_75l</kbd> and <kbd>3lev_42l</kbd> use about 800 MB of main memory per CPU.  You should run both sizes of each configuration if you have enough memory.</p>

<p>For the interested reader, we make the two parameter files and the thorn list here available.  </p>

<ul>
  <li><a href="Bench_BSSN_Carpet_1lev_60l.par">Bench_BSSN_Carpet_1lev_60l.par</a></li>
  <li><a href="Bench_BSSN_Carpet_1lev_75l.par">Bench_BSSN_Carpet_1lev_75l.par</a></li>
  <li><a href="Bench_BSSN_Carpet_3lev_32l.par">Bench_BSSN_Carpet_3lev_32l.par</a></li>
  <li><a href="Bench_BSSN_Carpet_3lev_42l.par">Bench_BSSN_Carpet_3lev_42l.par</a></li>
  <li><a href="Bench_BSSN_Carpet.thornlist">Bench_BSSN_Carpet.thornlist</a></li>
</ul>

<p>
These files are also contained in the benchmark's tarball.
<ul>
<li><a href="Bench_BSSN_Carpet.tar.gz">Bench_BSSN_Carpet.tar.gz</a></li>
</ul>
</p>

<p>
For an overview of the commands on how to download, compile and run the benchmark see <a href="/community/benchmarks/tutorial">Downloading and building the benchmark tarballs</a>.
</p>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
