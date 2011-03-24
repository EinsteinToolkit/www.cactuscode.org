<?php
$title='Media and News';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<p>Use the links on the right to check out the media subections for <a href="news">news</a>, <a href="presentations">presentations</a>, <a href="publications">publications</a>, <a href="prizes">prizes</a>, where you can find out more about the history and accomplishments of the Cactus Code project.</p>

<br />

<h4>History</h4>
<ul>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/media/news/recent.php');
?>
</ul>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>
