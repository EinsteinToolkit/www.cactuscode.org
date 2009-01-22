<?php
$title='About Cactus';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>Cactus provides computational scientists and engineers with a collaborative, modular and portable programming environment for parallel high performance computing. Cactus can make use of many other technologies for HPC, such as Samrai, HDF5, PETSC and PAPI, and several application domains such as numerical relativity, computational fluid dynamics and quantum gravity are developing open community toolkits for Cactus.
</p>

<p>
Cactus allows you to develop code in your language of choice: F77, F90, C, C++ are all supported --- developers write their own components, which we call `thorns' which are connected together by
the Cactus `Flesh'. Developers and users can take advantage of a selection of existing computational thorns, as well as a growing number of domain specific thorns.
</p>

<p>
Cactus runs on a wide range (just about all) architectures and operating systems. Cactus is being used as the basis for numerous projects in computational science, and new technologies 
such as Grid computing, parallel file I/O, adaptive mesh refinement are very quickly available to our users.
</p>

<p>
Cactus is developed and supported by an international team of computational and computer scientists, based largely at the Max Planck Institute for Gravitational Physics in Germany and the Center for Computation & Technology at Louisiana State University in the US.
</p>

<ul>

<li> <a href="../About/CactusTeam">Cactus Development Team</a>
<li> <a href="../About/History">Cactus History and Funding</a>
<li> <a href="../About/Prizes">Cactus Prizes and Major Achievements</a>
<li> <a href="../About/Contact">Contact Us!</a>

</ul>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>