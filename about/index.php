<!-- -*-mode:html;coding:utf-8-*- -->
<?php
$title='About Cactus';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>
Cactus provides computational scientists and engineers with a
collaborative, modular and portable programming environment for
parallel high performance computing.  Cactus can make use of many
other technologies for HPC, such as Samrai, HDF5, PETSc and PAPI, and
several application domains such as numerical relativity,
computational fluid dynamics and quantum gravity are developing open
community toolkits for Cactus.
</p>

<p>
Cactus allows you to develop code in your language of choice: F77,
F90, C, C++ are all supported &mdash; developers write their own
components, which we call "thorns" which are connected together by the
Cactus "flesh".  Developers and users can take advantage of a
selection of existing computational thorns, as well as a growing
number of domain specific thorns.
</p>

<p>
Cactus runs on a wide range (just about all) architectures and
operating systems.  Cactus is being used as the basis for numerous
projects in computational science, and new technologies such as Grid
computing, parallel file I/O, adaptive mesh refinement are very
quickly available to our users.
</p>

<p>
Cactus is developed and supported by an international team of
computational and computer scientists, based largely at the Center for
Computation &amp; Technology at Louisiana State University.
</p>

<ul>

<li> <a href="team/index.html">Cactus Development Team</a> </li>
<li> <a href="history">Cactus History and Funding</a> </li>
<li> <a href="contact">Contact Us!</a> </li>

</ul>

<br />

How do I cite Cactus?

<p> Here is an example citation of the flesh:
</p>

Goodale et al. 
"The Cactus Framework and Toolkit: Design and Applications."
<i>Vector and Parallel Processing -- VECPAR'2002, 5th International Converence, Lecture Notes in Computer Science.</i>
Berlin:Springer, 2003. &lt;http://edoc.mpg.de/3341&gt;.

<p> The BibTeX entry:
</p>

<pre>
@InProceedings{Goodale2002a,
  author =       {Tom Goodale and Gabrielle Allen and Gerd Lanfermann
                  and Joan Mass{\'o} and Thomas Radke and Edward
                  Seidel and John Shalf},
  title =        {The {Cactus} Framework and Toolkit: Design and
                  Applications},
  booktitle =    {Vector and Parallel Processing -- VECPAR'2002, 5th
                  International Conference, Lecture Notes in Computer
                  Science},
  year =         2003,
  address =      {Berlin},
  publisher =    {Springer},
  url =          {http://edoc.mpg.de/3341},
}
</pre>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
