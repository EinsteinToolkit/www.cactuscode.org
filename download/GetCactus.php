<?php
header('Content-type: text/plain');
#include_once('/var/www/cvs/Utilities/Scripts/GetCactus');

$gcscript = file_get_contents('https://svn.cactuscode.org/Utilities/trunk/Scripts/GetCactus');
echo $gcscript;
?>
