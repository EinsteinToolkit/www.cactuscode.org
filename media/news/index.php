<?php $title='News Stories';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');

//don't edit this file
//edit the file at /media/news/recent.php to change the current news stories

?>

<p>
<strong>Recent stories are listed on the right. <em>Use the site search (also on the right) to quickly find text from any news story listed below.</em></strong>
</p>

<?php /*
<ul>
<?php echo $new_blurbs;?>
</ul>
*/ ?>

<p><?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/tools/ls.php'); ?></p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
