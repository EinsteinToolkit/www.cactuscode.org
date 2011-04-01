<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='BenchIO FlexIO';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
$section='benchmarks';?>

<p>This benchmark measures the speed at which large amounts of data can be written to disk using the IOFlexIO I/O method and the FlexIO file format. It does that by generating an initial data checkpoint of the simulation, saving the current contents of 100 3-dimensional grid functions of the application. These grid functions are all given the local size on each processor of 80-cubed, and use REAL*8 data types, so that each processor contributes a total of 352 MBytes to the overall initial data checkpoint.</p>

<p>At the moment this benchmark contains parameter files for different I/O modes, each one with a different level of parallelism when doing output: with <kbd>onefile</kbd> the first processor receives data from all other processors and then does all the output to disk; <kbd>8proc</kbd> uses one I/O processor per group of 8 processors; <kbd>eachproc</kbd> writes one (chunked) checkpoint file per processor.</p>

<ul>
   <li><a href="BenchIO_FlexIO_onefile_80l.par">BenchIO_FlexIO_onefile_80l.par</a></li>

   <li><a href="BenchIO_FlexIO_8proc_80l.par">BenchIO_FlexIO_8proc_80l.par</a></li>

   <li><a href="BenchIO_FlexIO_eachproc_80l.par">BenchIO_FlexIO_eachproc_80l.par</a></li>

   <li><a href="BenchIO_FlexIO.thornlist">BenchIO_FlexIO.thornlist</a></li>
</ul>

<p>These files are also contained in the benchmark's tarball.</p>

<ul>
   <li><a href="BenchIO_FlexIO.tar.gz">BenchIO_FlexIO.tar.gz</a></li>
</ul>

<p>For an overview of the commands on how to download, compile and run the benchmark see <a href="http://www.cactuscode.org/Benchmarks/Tutorial">Downloading and building the benchmark tarballs</a>.</p>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
