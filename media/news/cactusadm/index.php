<?php $title='CactusADM - part of the SPEC CPU2006 ';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
The <a href  = "http://www.spec.org">SPEC</a> computer-benchmarking consortium
has released the 2006 edition of their widely used performance
benchmarking suite: SPEC CPU 2006.
<a href="http://www.spec.org/cpu2006/press/release.html">(see the official release).</a>
</p>
<p>
This includes 12 integer (<a href= "http://www.spec.org/cpu2006/CINT2006/">CINT2006</a>) 
 and 17 floating-point (<a href = "http://www.spec.org/cpu2006/CFP2006/">CFP2006</a>)
benchmarks, together with standard ways of combining their benchmark
results into single integer and floating-point performance indices.
</p>
<p>
<a href = "http://www.spec.org/auto/cpu2006/Docs/436.cactusADM.html">CactusADM</a>  was tested on different platforms and found to be  relevant and suitable for one of the 17 CPU-intensive benchmarks. CactusADM benchmark was prepared by Malcom Tobias from Center for Computational Biology,
Washington University School of Medicine, St. Louis and is based on the <a href = "http://www.cactuscode.org/old/Benchmark/"> BenchADM benchmark </a> that was used as a core Cactus benchmark for many years.
</p>

<p>
SPEC is known as probably the most widely used
benchmark in the computer industry for evaluating the performance of processors and compilers.
</p>
<p>
In particular,
compiler developers put a lot of effort into tuning compilers to work
well on the SPEC benchmark, so having Cactus in the SPEC suite should
lead to compilers doing a better job on our code.
</p>
<p>
With this release, CactusADM benchmark joins application benchmarks from other intensive scientific applications in different fields, such as GAMESS, ZEUS, WRF, GROMACS and NAMD.
</p>

<h3 class="align-right">29 Dec 2006 — elena</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>