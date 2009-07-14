<?php $title='Benchmarks and Profiling With Cactus Applications';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>Cactus applications have been widely used for benchmarking for machine procurement and testing, for understanding performance characteristics, and for profiling and optimization studies. The Cactus Team regularly run the benchmarks on this page with different architectures, compilers, MPI implementations etc. More details about publications and reports resulting from this work can be found on our <a href= "http://www.cactuscode.org/Papers/performance"> publications page</a>. Sasanka Madiraju's <a href = "http://www.cactuscode.org/Articles/Cactus_Madiraju06.pdf/">master thesis </a> presents the performance of Cactus benchmarks
on different machines and architectures. A 2005 <a href="http://www.cactuscode.org/Articles/Common_Frameworks.pdf">report to NSF</a> describes why Cactus provides a good benchmarking platform.

Also see the <a href= "http://www.cactuscode.org/News/">
News</a>: <a href = "http://www.cactuscode.org/News/cactusadm">CactusADM</a> is now part of the 2006 edition of the SPEC benchmark suite.
</p>
<p>
To read a description of the significance and profile of BSSN_PUGH, along with performance and scaling results with various architectures, see <i><a href="http://www.cactuscode.org/Articles/Cactus_Allen07a.pre.pdf">"A Scientific Application Benchmark using the Cactus Framework"</a></i>
</p>

<h3>Standard Benchmarks</h3>
<p>
We currently maintain five standard benchmarking applications:
<ul>  
  <li><a href="bench_bssn_pugh">Bench_BSSN_PUGH</a>:
    A numerical relativity code using finite differences on an uniform structured grid. It uses the CactusEinstein infrastructure to evolve a vacuum spacetime, using the BSSN formulation of the Einstein equations. It employs finite differencing in space, an explicit time integration method. Download <a href="../Benchmarks/Bench_BSSN_PUGH.tar.gz">Bench_BSSN_PUGH.tar.gz</a>
  </li>
  
  <li><a href="bench_bssn_carpet">Bench_BSSN_Carpet</a>:
    A numerical relativity code
    using <a href="http://www.carpetcode.org/">mesh refinement</a>. It is similar to BSSN_PUGH, but instead of a uniform structured grid it uses the Carpet driver. Download <a href="Bench_BSSN_Carpet.tar.gz">Bench_BSSN_Carpet.tar.gz</a>
  </li>
    
  <li><a href="bench_whisky_carpet">Bench_Whisky_Carpet</a>:
    A <a href="http://www.whiskycode.org/">relativistic
      hydrodynamics</a> code using mesh refinement. It is similar to BSSN_Carpet, but it solves the relativistic Euler equations in addition to the Einstein equations. Download <a href="Bench_Whisky_Carpet.tar.gz">Bench_Whisky_Carpet.tar.gz</a>
  </li>

  <li><a href="benchio_flexio">BenchIO_FlexIO</a>:
    An I/O benchmark using John Shalf's FlexIO library. It measures the speed of writing simulation data to disk using the IOFlexIO I/O method. Download <a href="BenchIO_FlexIO.tar.gz">BenchIO_FlexIO.tar.gz</a>
  </li>

  <li><a href="benchio_hdf5">BenchIO_HDF5</a>:
    An I/O benchmark using the <a href="http://hdf.ncsa.uiuc.edu/HDF5/">HDF5</a> library.  It measures the speed of writing simulation data to disk using the HDF5 I/O method. Download <a href="BenchIO_HDF5.tar.gz">BenchIO_HDF5.tar.gz</a>
  </li>

  <li>Bench_ADM: historical benchmark that has been replaced by BSSN_PUGH. It uses a different numerical formulation of the equations of general relativity (ADM). It also forms part of the SPEC CPU2006.</li>
</ul>  
</p>

<hr />
<p>
Each tarball contains a Cactus source tree with just the thorns necessary to run the benchmark.</p>
<p>

<p>We have combined the above tarballs into
  one: <a href="Cactus.tar.gz">Cactus.tar.gz</a>.  The
  same source code (but without the benchmarking parameter files and thorn lists) is available from our CVS repositories with the tag <kbd>benchmark_20051007</kbd>.
</p>


<ul>
  <li><a href="tutorial">Downloading and building the benchmark tarballs</a></li> 

  <li><a
  href="http://www.cactuscode.org/old/Benchmark/BenchDB/query.php">Benchmark
  database</a></li>
</ul>

<h3>Pre-2004 Benchmarks</h3>

<p>We also maintain a number of results on our old site.  The following link has previous results from for a number of different benchmarks and target architectures.</p>

<ul>
  <li><a href="http://www.cactuscode.org/old/Benchmark/">Pre-2004
  benchmarks</a></li>
</ul>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>