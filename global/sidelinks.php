<?php

//choose side links block
switch ($section)
{
case 'about': echo '
<h2>About</h2>
<ul class="sidemenu">
	<li><a href="/about/funding.php">Funding</a></li>
	<li><a href="/about/contact.php">Contact</a></li>
	<li><a href="/about/history.php">History</a></li>
	<li><a href="/about/mailinglists">Mailing Lists</a></li>
	<li><a href="/about/partners/index.html">Partners</a></li>
	<li><a href="/about/team/index.html">Team</a></li>
</ul>
'; break;

case 'benchmarks': echo '
<h2>Benchmarks</h2>
<ul class="sidemenu">
	<li><a href="/community/benchmarks/tutorial/index.html">Tutorial</a></li>
	<li><a href="/community/benchmarks/bench_bssn_pugh/index.html">BSSN Pugh</a></li>
	<li><a href="/community/benchmarks/bench_bssn_carpet/index.html">BSSN Carpet</a></li>
	<li><a href="/community/benchmarks/bench_whisky_carpet/index.html">Whisky Carpet</a></li>
	<li><a href="/community/benchmarks/benchio_flexio/index.html">IO FlexIO</a></li>
	<li><a href="/community/benchmarks/benchio_hdf5/index.html">IO HDF5</a></li>
</ul>
'; break;

case 'partners': echo '
<h2>Community</h2>
<ul class="sidemenu">
	<li><a href="/community/partners/AEI">AEI</a></li>
	<li><a href="/community/partners/LSU">LSU</a></li>
</ul>
'; break;


case 'visualization': echo '
<h2>Visualization</h2>
<ul class="sidemenu">
	<li><a href="/documentation/visualization/Amira/index.html">Amira</a></li>
	<li><a href="/documentation/visualization/DataVaultXVS/index.html">DataVaultXVS</a></li>
	<li><a href="/documentation/visualization/gnuPlot/index.html">gnuPlot</a></li>
	<li><a href="/documentation/visualization/IsoView/index.html">IsoView</a></li>
	<li><a href="/documentation/visualization/openDX/index.html">openDX</a></li>
	<li><a href="/documentation/visualization/VisIt/index.html">VisIt</a></li>
	<li><a href="/documentation/visualization/xGraph/index.html">xGraph</a></li>
	<li><a href="/documentation/visualization/yGraph/index.html">yGraph</a></li>
</ul>'; break;


case '_': echo '
'; break;


case 'download': echo '
<h2>Download</h2>
<ul class="sidemenu">
	<li><a href="/download/configfiles/index.html">Configuration Files</a></li>
	<li><a href="/download/releasenotes/index.html">Release Notes</a></li>
	<li><a href="/download/thorns/index.html">Thorn Lists</a></li>
	<li><a href="http://einsteintoolkit.org/index.html">Einstein Toolkit</a></li>
	<li><a href="/documentation/tutorials/wavetoydemo/index.html">WaveToy Demo</a></li>
</ul>
'; break;


case 'search':
echo 'search again';
break;


//make this dynamic as part of the news system
default: echo '
<h2>Project Timeline</h2>
<ul class="sidenews">
';
include_once($_SERVER['DOCUMENT_ROOT'].'/media/news/recent.php');
echo '<li class="align-right"><a href="/media/news/index.html">More...</a></li>
</ul>
'; break;
}
?>
