<?php
$title='Thorn Lists';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>
      <p>
        This page describes standard thornlists for Cactus.
      </p>


   <!--  <p>   For information on using a ThornList for checking out thorns, please see the <a
        href="/documentation/tutorials/managementHowTo.txt">Management-HOWTO</a> (but now outdated). The
<a href="MakeThornList">MakeThornList</a> script can be used to generate a ThornList for a specific parameter file. (But note that up to now this will generate an old-style ThornList for use with GetCactus and not GetComponents.) 
  
        For more information about individual thorns, check the  <a href="/documentation/tutorials/ComputationalToolKitHowTo.txt">ComputationalToolKit-HOWTO</a>.
      </p> -->

  
<ul>

<li> The Cactus Computational Toolkit includes thorns supported and developed by the Cactus Team that provide general computational infrastructure<br>      
       <a href="ComputationalToolkit.th">ComputationalToolkit.th</a>
</li>
     
            <li>The WaveToy example  evolves a 3D scalar field. This application is one of the simplest examples of a solving a hyperbolic partial differential equation using finite differences, and so provides a very good learning example of how a PDE can be solved within the Cactus framework. The WaveToy application is provided in each of the programming languages supported by Cactus.  <br>
 <a href="WaveToy.th">WaveToy.th</a>
     
    </ul>
      

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
