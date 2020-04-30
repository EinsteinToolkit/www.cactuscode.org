<?php $title='Success with the PARAMESH Grant';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
PARAMESH Grant for the development of a Cactus driver.
</p>

<p>
Recently, <a href="http://www.nasa.gov">NASA  </a> awarded an <a href="http://sbir.gsfc.nasa.gov/SBIR/SBIR.html">STTR grant</a> to a collaboration of <a href="http://www.decisive-analytics.com/home.html">Decisive Analytics Corporation (DAC)</a> and <a href="http://www.lsu.edu">Louisiana State University (LSU)</a>.  In this <a href="http://sbir.gsfc.nasa.gov/SBIR/sttr2005/phase1/awards/2005firm.html" >project</a>, we will design and
implement a <a href="http://www.cactuscode.org">Cactus</a> driver which is based on <a href="http://www.physics.drexel.edu/~olson/paramesh-doc/Users_manual/amr.html"> Paramesh</a>, a parallel adaptive mesh refinement library.  This project is called "Parca", a mixture of the words "Cactus" and "Paramesh".
</p>

<p>A driver in Cactus manages storage for variables and implements communication for
parallel processing.  A driver is the heart piece for the efficient use of
supercomputers.  Parca will be a third driver for Cactus, next to PUGH, a highly
efficient unigrid driver, and the mesh refinement driver Carpet
[http://www.carpetcode.org/].  Parca will implement a somewhat different mesh refinement
algorithm than Carpet, and will make the knowledge and experience that is build into
Paramesh available to Cactus users.
</p>

<p>Our partner at DAC is David Fiske, who received a PhD in numerical relativity from the <a href="http://www.physics.umd.edu/grt/">
University of Maryland</a>.  David Fiske will visit the CCT from June 5 to 9.
</p>

<h3 class="align-right">28 Jun 2006 — jeffd</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>