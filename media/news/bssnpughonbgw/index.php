<?php $title='Properly formatted story title';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p><b>November 2005:</b> The Cactus team was recently given access to the BlueGene/L machine at the IBM TJ Watson Research Center to conduct benchmarking runs. 
</p>

<p>
Using a standard benchmark which the team has used across a number of architectures, Cactus, with the PUGH driver, showed a linear speedup for a weak scaling problem to the limit of the CPUs available, and with no detectable loss of scaling efficiency for high processor numbers.
</p>

<p>
These results strongly suggest that this application would be able to scale to the largest machines available at this time, thus allowing physicists using Cactus to conduct simulations with exceptional accuracy.
</p>

<p>
Here is <a href="bssnpugh.txt">the data</a> we used with the <a href="Scaling_BSSN_PUGH_script.txt">gnuplot script</a> to generate the scaling graph of the BSSN_PUGH on BlueGene/L (BGW).
</p>

<a href="Scaling_BSSN_PUGH.png"><img  src="Scaling_BSSN_PUGH.png" width="480" height="360" /></a>

<h3 class="align-right">29 Jan 2007 — elena</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>