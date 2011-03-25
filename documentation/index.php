<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Documentation';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<ul>

  <li>User's Guide (<a href="usersguide/UsersGuide.pdf">PDF</a>, 
  <a href="usersguide/UsersGuide.html">HTML</a>) </li>
    <ul><p> The User's Guide is for those new to Cactus. It details the
    process of installing and compiling Cactus, running applications, thorn
    wrting, utility routines, and thorn infrastructure. <br></ul></p>
  <li>
  Reference Manual (<a href="referencemanual/ReferenceManual.pdf">PDF</a>,
  <a href="referencemanual/ReferenceManual.html">HTML</a>) </li>
    <ul><p> The Reference Manual gives a list of thorns, CCTK_* functions, Util_* functions,
    and in addition explains configuration file syntax, schedule bins, and CVS commands for
    checkout and commit procedures. <br></ul></p>
  <li><a href="CoreDoc.pdf">Advanced Concepts (PDF)</a> </li>
    <ul><p> This document concisely explains concepts that span multiple thorns but which
    are not part of the flesh, namely tag tables and the post-processing of data from the 
    CactusEinstein infrastructure. <br></ul></p> 
  <li><a href="Readme_Info.php">Overview of Thorn README files </a> </li>
    <ul><p> This table gives authors and summaries of the Thorn README files. <br></ul></p>
  <li><a href="tutorials/">Tutorials</a></li>
    <ul><p> These tutorials, some of which were presented in past conferences such as 
    TeraGrid, offer an interactive approach to using Cactus; others explain the installation
    and compilation of Cactus on specific architectures. <br></ul></p>
  <li><a href="faq">FAQ</a></li>
    <ul><p> Frequently Asked Questions regarding the background, CVS checkout, configuration,
    building, and running of Cactus, in addition to thorn writing and documentation.<br></ul></p>
  <li><a href="arrangements/">Arrangement Guides</a></li>
    <ul><p> This includes documentation for the CactusWave and CactusEinstein thorn arrangements.
    It gives the purpose of the arrangement and the description of the thorns.<br></ul></p>
  <li><a href="thorns/">Thorn Guides</a></li>
    <ul><p> This is a list of individual PDF document files detailing the purpose and use of 
    each thorn.<br></ul></p>
  <li><a href="visualization/">Visualization</a></li>
    <ul><p> This lists and describes visualization packages and data output formats for Cactus.
    <br></ul></p>

</ul>

<br /><br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
