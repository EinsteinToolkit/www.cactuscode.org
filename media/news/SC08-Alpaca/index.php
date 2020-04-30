<?php $title='Two ALPACA tools displayed at SC08';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
// news specific variables
?>
<p>
At the recent <a href="http://sc08.supercomputing.org/">
2008 Supercomputing conference</a> in Austin, the LSU Center for Computation
and Technology booth provided a showcase for two new remote debugging tools
currently developed as part of the
<a href="http://www.cct.lsu.edu/~eschnett/Alpaca/">ALPACA</a>
project: VisitConnect and HTTPS.
</p>

<p>
VisitConnect is a module that provides running Cactus simulations with
the capability to
expose their mesh and data structures to the visualization package VisIt.
Leveraging on VisIt's functionalities, the module allows for remote visualization
and simulation control through pause, restart and single-step commands.
</p>

<p>
HTTPS implements simulation control through HTTP access to the simulation host.
The controls allow a simulation to be paused and examined at the level of a
single function call. It can be used, for instance, to determine which
function causes simulation to crash, or to check if the actual order of
functions execution is correct. It is a good starting point for
different interesting visualization and debugging functionalities.
</p>

<a href="visitconnect"><img src="visitconnect.png" height="150" /></a>
<a href="https"><img src="https.png" height="150" /></a>

<h3 class="align-right">16 Dec 2008 — bentivegna</h3>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>