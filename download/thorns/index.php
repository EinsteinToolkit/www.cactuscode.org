<?php
$title='Thorn Lists';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>
      <p>
        The thorn lists below provide a convenient way for choosing a configuration of Cactus for checkout and compilation.  More thorn lists will be added as applications and examples are developed. Note that thorn lists for the development version of Cactus may be slightly different.
<!-- , and should be downloaded from the 
        <a href="../development/developers.html">developers</a> page. -->
      </p>

      <p>

        For information on using a ThornList for checking out thorns, please see the <a
        href="/documentation/tutorials/managementHowTo.txt">Management-HOWTO</a>. The
<a href="MakeThornList">MakeThornList</a> script can be used to generate a ThornList for a specific parameter file.   
      </p>

      <p>
      
      <p>
        For more information about individual thorns, check the  <a href="/documentation/tutorials/computationalToolKitHowTo.txt">ComputationalToolKit-HOWTO</a>.
      </p>

      
       <!-- <a name="computational"> -->
      <H2>Computational Infrastructure</H2>
      
      <p>
        The computational infrastructure thorns are designed to provide the basic utilities for any simulation, such as IO, reductions, and driver thorns.
      </p>
      
      <p>
        Here we divide the infrastructure thorns up depending on the additional libraries which need to be available for compilation.
      </p>
      
      <ul>  
        <li>

          <p>
        <b>Cactus Computational ToolKit</b>
        <br>
        This toolkit contains thorns which will work on all supported platforms, regardless of the availability of additional libraries, needing only the standard required software. 
          </p>
          
          <p>
          <ul>
        <li><a href="computationalToolkit.th">ComputationalToolkit.th</a>

          </ul>
        </p>
      </ul>    
      
    <!--  <a name="wavetoy">   -->
      <h2>WaveToy Demonstration</h2>
      <p>
        The WaveToy set of thorns perform evolutions of a 3D scalar field. This application is one of the simplest examples of a solving a hyperbolic partial differential equation using finite differences, and so provides a very good learning example of how a PDE can be solved within the Cactus framework. Despite it's simplicity, the WaveToy example is prototypical of much more complicated systems of equations.
      </p>
      
      <p>

        The WaveToy application is provided in each of the programming languages supported by Cactus.  This makes the WaveToy applications a useful tool to check compilation of Cactus on your platform, especially if you do not have a Fortran 77 or Fortran 90 compiler available.
      </p>

      
      <ul>
    
          
        <li>
          <p><b>WaveToy</b> <br>Scalar wave evolution implemented in all our supported programming languages. Use this Thorn List to check that Cactus is working properly on your platform. 

          <ul>
        <li><a href="WaveToy.th">WaveToy.th</a>
          </ul>

          </ul>
        </li>
    </ul>
      

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
