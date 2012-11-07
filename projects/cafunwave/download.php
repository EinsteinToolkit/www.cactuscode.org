<?php $title='Cactus-related Projects';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

Downloading Funwave + Cactus consists of the following steps:

<pre>
curl -O https://raw.github.com/gridaphobe/CRL/master/GetComponents

chmod a+x GetComponents

./GetComponents --parallel \
    https://svn.cct.lsu.edu/repos/projects/ngchc/code/CactusCoastal/funwave_carpet.th
</pre>

To build, follow the instructions on the
<a href="http://cactuscode.org">http://cactuscode.org</a> and
<a href="http://einsteintoolkit.org">http://einsteintoolkit.org</a> 
websites.

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
