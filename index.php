<?php
$title='Welcome';
$hide_path=1;
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
Cactus is an open source problem solving environment designed for scientists and engineers.  Its modular structure easily enables parallel computation across different architectures and collaborative code development between different groups.  Cactus originated in the academic research community, where it was developed and used over many years by a large international collaboration of physicists and computational scientists.
</p>

<p>
The name Cactus comes from the design of a central core (or "flesh") which connects to application modules (or "thorns") through an extensible interface.  Thorns can implement custom developed scientific or engineering applications, such as computational fluid dynamics.  Other thorns from a standard computational toolkit provide a range of computational capabilities, such as parallel I/O, data distribution, or checkpointing.
</p>

<p>
Cactus runs on many architectures.  Applications, developed on standard workstations or laptops, can be seamlessly run on clusters or supercomputers.  Cactus provides easy access to many cutting edge software technologies being developed in the academic research community, including the Globus Metacomputing Toolkit, HDF5 parallel file I/O, the PETSc scientific library, adaptive mesh refinement, web interfaces, and advanced visualization tools.
</p>

<p>Connect to our <a href="http://cactus.cct.lsu.edu:5555/">Cactus demo</a> to see the simple WaveToy example in action, and read the <a href="../WaveToyDemo/index_html">demo guide</a>.</p> 

<p><i>(Old Cactus weg pages: <a href="http://www.cactuscode.org/old/index.html">http://www.cactuscode.org/old/index.html</a>.)</i></p>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>