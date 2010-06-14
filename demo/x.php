<?php
$title='Website Updates Interface';
$hide_path=1;
$category='internal';

include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<br />

<?php
if(isset($_GET['golive']))
{
  echo '<h3>Updating the Live site...</h3>';
  echo '<p>'.exec('/var/www/golive').'</p>';
  echo '<p>The Live site is now current.</p><br />';
  echo '<p>&lang; Go back to <a href="/x">updates interface</a></p>';
  echo '<p>Visit the <a href="http://cactuscode.org">live site</a></p>';
}
elseif(isset($_GET['updatesvn']))
{
  echo '<h3>Updating the Preview site...</h3>';
  echo '<p>'.exec('/var/www/updatesvn').'</p>';
  echo '<p>The preview site is now current.</p><br />';
  echo '<p>&lang; Go back to <a href="/x">updates interface</a></p>';
  echo '<p>Visit the <a href="http://preview.cactuscode.org">preview site</a></p>';
}
else
{
  echo '<table>
<tr>
<th><a href="http://cactuscode.org">Live Site</a></th>
<th><a href="http://preview.cactuscode.org">Preview Site</a></th>
</tr>
<tr>

<td>
<p>
The live site is currently at version <strong>'
.exec('ls /var/www/')
.'</strong>. 
<br /><br />
<input class="button" type="button" value="Make Recent Changes Live" onclick="window.location.href=\'/x?golive\'" />
<br /><br />This pushes any changes from the preview site to the live site and happens automatically every hour, on the hour.
</p>
</td>
<td>
<p>
The preview site is currently at version <strong>'
.exec('svnversion /var/www/dev')
.'</strong>. 
<br /><br />
<input class="button" type="button" value="Manually Update Preview Site" onclick="window.location.href=\'/x?updatesvn\'" />
<br /><br />This updates repositories on the webserver and happens automatically after svn commits.
</p>
</td>

</tr>
</table>';
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
