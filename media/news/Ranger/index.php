<?php $title='Cactus Benchmarks Run on Ranger';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
The Cactus group at LSU successfully ported the Cactus framework to <a href="http://www.tacc.utexas.edu/services/userguides/ranger">Ranger</a>, the new 60,000 core supercomputer at <a href="http://www.tacc.utexas.edu">TACC</a>, and ran a series of numerical relativity benchmarks there.  We are happy to report that these benchmarks scale up to 4096 cores, the maximum job size possible while Ranger is still in "friendly user" mode.  Ranger is one of the largest computational resources in the world, consisting of 3,936 16-way SMP compute-nodes with 123 TByte of memory, and with a theoretical peak performance of 504 TFlop/s.
</p>
<p>
Our benchmarks use a hybrid communication scheme combining MPI and OpenMP, using the shared memory capabilities of Ranger's nodes to reduce the memory overhead of parallelisation.  We are grateful for the help we received from Ranger's support team and are looking forward to using the full machine in the near future.
</p>
<p>
The graph below shows weak scaling tests for two unigrid and one nine-level <a href="http://www.carpetcode.org/">mesh refinement</a> benchmark solving the Einstein equations.  The problem size was kept fixed per core, and there were 4 OpenMP threads per MPI process, with 1 MPI process per socket.  (The PUGH benchmark was run only up to 1024 cores.)  As the graphs show, this benchmark scales near perfectly in unigrid, and has only small variations in run time for nine levels of mesh refinement.
</p>
<p>
<center>
<a href="Ranger.png"><img src="Ranger.png" width="75%" /></a>
</center>
</p>

<h3 class="align-right">15 Jan 2008 — elena</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>