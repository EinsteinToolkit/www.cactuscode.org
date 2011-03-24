<?php

//choose side links block
switch ($section)
{
case 'about': echo '
<h2>About</h2>
<ul class="sidemenu">
	<li><a href="/about/contact">Contact</a></li>
	<li><a href="/about/funding">Funding</a></li>
	<li><a href="/about/history">History</a></li>
	<li><a href="/about/team/">Team</a></li>
</ul>
'; break;


case 'community': echo '
<h2>Community</h2>
<ul class="sidemenu">
	<li><a href="/community/benchmarks/">Benchmarks</a></li>
	<li><a href="/community/bugs/">Bugs</a></li>
	<li><a href="/community/mailinglists">Mailing Lists</a></li>
	<li><a href="/community/partners/">Partners</a></li>
	<li><a href="/community/projects/">Projects</a></li>
	<li><a href="/community/regressiontests/">Regression Tests</a></li>
</ul>
'; break;

case 'benchmarks': echo '
<h2>Benchmarks</h2>
<ul class="sidemenu">
	<li><a href="/community/benchmarks/tutorial/">Tutorial</a></li>	
	<li><a href="/community/benchmarks/bench_bssn_pugh/">BSSN Pugh</a></li>
	<li><a href="/community/benchmarks/bench_bssn_carpet/">BSSN Carpet</a></li>
	<li><a href="/community/benchmarks/bench_whisky_carpet/">Whisky Carpet</a></li>
	<li><a href="/community/benchmarks/benchio_flexio/">IO FlexIO</a></li>
	<li><a href="/community/benchmarks/benchio_hdf5/">IO HDF5</a></li>
</ul>
'; break;

case 'partners': echo '
<h2>Community</h2>
<ul class="sidemenu">
	<li><a href="/community/partners/AEI">AEI</a></li>
	<li><a href="/community/partners/LSU">LSU</a></li>
</ul>
'; break;


/*
case 'documentation':
echo '
<h2>Documentation</h2>
<ul class="sidemenu">
	<li><a href="/documentation/tutorials/">Tutorials</a></li>
	<li><a href="/documentation/faq">FAQ</a></li>
	<li><a href="/documentation/arrangements/">Arrangement Guides</a></li>
	<li><a href="/documentation/thorns/">Thorn Guides</a></li>
	<li><a href="/documentation/visualization/">Visualization</a></li>
</ul>
';
break;
*/

case 'visualization': echo '
<h2>Visualization</h2>
<ul class="sidemenu">
	<li><a href="/documentation/visualization/Amira/">Amira</a></li>
	<li><a href="/documentation/visualization/DataVaultXVS/">DataVaultXVS</a></li>
	<li><a href="/documentation/visualization/gnuPlot/">gnuPlot</a></li>
	<li><a href="/documentation/visualization/IsoView/">IsoView</a></li>
	<li><a href="/documentation/visualization/openDX/">openDX</a></li>
	<li><a href="/documentation/visualization/VisIt/">VisIt</a></li>
	<li><a href="/documentation/visualization/xGraph/">xGraph</a></li>
	<li><a href="/documentation/visualization/yGraph/">yGraph</a></li>
</ul>'; break;


case '_': echo '
'; break;


case 'download': echo '
<h2>Download</h2>
<ul class="sidemenu">
	<li><a href="/download/configfiles/">Configuration Files</a></li>
	<li><a href="/download/releasenotes/">Release Notes</a></li>
	<li><a href="/download/thorns/">Thorn Lists</a></li>
	<li><a href="http://einsteintoolkit.org/">Einstein Toolkit</a></li>
	<li><a href="/documentation/tutorials/wavetoydemo/">WaveToy Demo</a></li>
</ul>
'; break;


//internal sidebar?

/*
case 'media': echo '
'; break;
*/

case 'search':
echo 'search again';
break;


//make this dynamic as part of the news system
default: echo '
<h2>Project Timeline</h2>
<ul class="sidenews">
';
include_once($_SERVER['DOCUMENT_ROOT'].'/media/news/recent.php');
echo '<li class="align-right"><a href="/media/news/">More...</a></li>
</ul>
'; break;
}
?>
