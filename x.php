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
  echo '<h2>Updating the Live site...</h2>';
  echo '<p>'.exec('/var/www/golive').'</p>';
  echo '<p>The Live site is now current.</p><br />';
  echo '<p><a href="/x">&lang; back to updates interface</a></p>':
}
elseif(isset($_GET['updatesvn']))
{
  echo '<h2>Updating the Preview site...</h2>';
  echo '<p>'.exec('/var/www/updatesvn').'</p>';
  echo '<p>The preview site is now current.</p><br />';
  echo '<p><a href="/x">&lang; back to updates interface</a></p>':
}
else
{
  echo '<table>
<tr>
<th>Live Site</th>
<th>Preview Site</th>
</tr>
<tr>

<td>
<p>
The live site is currently at version <strong>'
.exec('svnversion /var/www/live')
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
