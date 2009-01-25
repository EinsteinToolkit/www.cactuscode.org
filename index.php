<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Welcome'; $hide_path=1;
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>
  Cactus is an open source problem solving environment designed for
  scientists and engineers.  Its modular structure easily enables
  parallel computation across different architectures and
  collaborative code development between different groups.  Cactus
  originated in the academic research community, where it was
  developed and used over many years by a large international
  collaboration of physicists and computational scientists.
</p>

<p>
  The name Cactus comes from the design of a central core ("flesh")
  which connects to application modules ("thorns") through an
  extensible interface.  Thorns can implement custom developed
  scientific or engineering applications, such as computational fluid
  dynamics.  Other thorns from a standard computational toolkit
  provide a range of computational capabilities, such as parallel I/O,
  data distribution, or checkpointing.
</p>

<p>
  Cactus runs on many architectures.  Applications, developed on
  standard workstations or laptops, can be seamlessly run on clusters
  or supercomputers.  Cactus provides easy access to many cutting edge
  software technologies being developed in the academic research
  community, including the <a href="http://www.globus.org/">Globus</a>
  Metacomputing
  Toolkit, <a href="http://www.hdfgroup.org/HDF5/">HDF5</a> parallel
  file I/O, the <a href="http://www.mcs.anl.gov/petsc/">PETSc</a>
  scientific library, <a href="http://www.carpetcode.org/">adaptive
  mesh refinement</a>, web interfaces, and advanced visualization
  tools.
</p>

<p>
  Connect to our <a href="http://cactus.cct.lsu.edu:5555/">Cactus
  demo</a> to see the simple WaveToy example in action, and read
  the <a href="/documentation/tutorials/wavetoydemo/">demo guide</a>.
</p>
 
<p>(Very old Cactus web pages: <a href="/old/">cactuscode.org/old</a>.)</i></p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
