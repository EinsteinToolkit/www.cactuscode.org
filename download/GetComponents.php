<?php
header('Content-type: text/plain');
#include_once('/var/www/cvs/Utilities/Scripts/GetComponents');

// $gcscript = file_get_contents('https://svn.cactuscode.org/Utilities/trunk/Scripts/GetComponents');
$gcscript = file_get_contents('https://github.com/gridaphobe/CRL/raw/master/GetComponents');
echo $gcscript;
?>
