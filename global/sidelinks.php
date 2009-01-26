<?php

//choose side links block
switch ($section)
{
case 'about':
echo '
<h2>About</h2>
<ul class="sidemenu">
	<li><a href="/about/contact">Contact</a></li>
	<li><a href="/about/funding">Funding</a></li>
	<li><a href="/about/history">History</a></li>
	<li><a href="/about/team/">Team</a></li>
</ul>
';
break;


case 'community':
echo '
<h2>Community</h2>
<ul class="sidemenu">
	<li><a href="/community/benchmarks/">Benchmarks</a></li>
	<li><a href="/community/bugs/">Bugs</a></li>
	<li><a href="/community/mailinglists">Mailing Lists</a></li>
	<li><a href="/community/partners/">Partners</a></li>
	<li><a href="/community/projects/">Projects</a></li>
	<li><a href="/community/regressiontests/">Regression Tests</a></li>
</ul>
';
break;


//demo sidebar?


case 'documentation':
echo '
<h2>Documentation</h2>
<ul class="sidemenu">
	<li><a href="/documentation/guides/">Guides</a></li>
	<li><a href="/documentation/tutorials/">Tutorials</a></li>
</ul>
';
break;

case 'guides':
echo '
<h2>Guides</h2>
<ul class="sidemenu">
	<li><a href="/documentation/guides/arrangements/">Arrangements</a></li>
	<li><a href="/documentation/guides/maintainer">Maintainer\'s Guide</a></li>
	<li><a href="/documentation/guides/reference">Reference Guide</a></li>
	<li><a href="/documentation/guides/thorns/">Thorns</a></li>
	<li><a href="/documentation/guides/users/">Users\' Guides</a></li>
	<li><a href="/documentation/guides/visualization/">Visualization Guides</a></li>
</ul>';
break;

case '_':
echo '
';
break;


case 'download':
echo '
<h2>Download</h2>
<ul class="sidemenu">
	<li><a href="/download/configfiles/">Configuration Files</a></li>
	<li><a href="/download/releasenotes/">Release Notes</a></li>
	<li><a href="/download/thorns/">Thorn Lists</a></li>
	<li><a href="/documentation/tutorials/wavetoydemo/">WaveToy Demo</a></li>
</ul>
';
break;


//internal sidebar?


case 'media':
echo '
<h2>Media</h2>
<ul class="sidemenu">
	<li><a href="/media/news/">News</a></li>
	<li><a href="/media/presentations/">Presentations</a></li>
	<li><a href="/media/prizes/">Prizes</a></li>
	<li><a href="/media/publications/">Publications</a></li>
</ul>
';
break;


case 'search':
echo 'search again';
break;


//make this dynamic as part of the news system
default:
include_once($_SERVER['DOCUMENT_ROOT'].'/media/news/recent.php');
echo '
<h2>Recent News</h2>
<ul class="sidemenu">'.$news_links.
'	<li class="align-right"><a href="/media/news/">More...</a></li>
</ul>
';
break;
}
?>
