<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="/global/style.css" type="text/css" />
<style type="text/css"><?php

  $path_all=explode("/",$_SERVER["PHP_SELF"]);
  $category=$path_all[1]; //set to the top level directory

  //find the lowest directory ignoring filename and any extra slashes
  $expect_directory=0; //not expecting the lowest directory yet
  while(count($path_all)>0) { //prevent unexpected inf loop
  $last_element=array_pop($path_all); //pop off the end of the array
  //once the filename is found, start expecting directory
  if ($last_element!="" and $expect_directory==0) $expect_directory=1;
  elseif ($last_element!="" and $expect_directory==1) break;} //got it, stop looping
  $section=$last_element; //set to lowest directory

  //style the menu link whose id matches the current first level directory
  list($blank0, $category)=explode("/",$_SERVER["PHP_SELF"]);
  if ($category=='x.php') $category='internal'; //special case for update interface
  echo '#menu ul li#'.$category.' a {text-decoration:overline;}';

?></style>
<title>Cactus Code &mdash; <?php echo $title; ?></title>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
	<!--header -->
	<div id="header">
		<h1 id="logo-text"><img id="logo" src="/global/images/cactuslogo.png" /><a href="/">cactus code</a></h1>
		<!-- <p id="slogan">code</p> -->

		<div id="header-links">
			<p>
			<a href="/">Home</a> |
			<a href="/about/contact">Contact</a>
			</p>
		</div>
	</div>

	<!-- navigation -->
	<div id="menu"><ul>
		<li id="about"><a href="/about/">About</a></li>
        <!--
		<li id="demo"><a href="/demo/">Demo</a></li>
        -->
		<li id="documentation"><a href="/documentation/">Documentation</a></li>
		<li id="download"><a href="/download/">Download</a></li>
		<li id="internal"><a href="https://wiki.cct.lsu.edu/frameworks">Internal</a></li>
		<li id="media"><a href="/media/">Media</a></li>
		<li id="projects"><a href="/projects/">Projects</a></li>
		<li id="sitemap"><a href="/sitemap.php">Site Map</a></li>
	</ul></div>

	<!-- content-wrap starts here -->
	<div id="content-wrap">
		<?php
		include_once($_SERVER['DOCUMENT_ROOT'].'/global/breadcrumbs.php');
		?>

		<div id="main">
			<h2><?php echo $title;?></h2>
