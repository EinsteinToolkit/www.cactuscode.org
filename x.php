<?php
$title='update interface';
$hide_path=1;
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');

echo '<br />';
if(isset($_GET['golive']))
{
  echo exec('/var/www/golive');
  echo '<p>Live site updated!</p>';
}
elseif(isset($_GET['getpreview']))
{
  echo exec('/var/www/updatesvn');
  echo '<p>Preview site updated.</p>';
}
else
{
  echo '<p><h3><a href="/x?golive">Update the live site now</a></h3></p>';
}

include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>