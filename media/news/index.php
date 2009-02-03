<?php $title='News';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');

//include if it hasn't already been on the side
include_once($_SERVER['DOCUMENT_ROOT'].'/media/news/recent.php');

//don't edit this file
//edit the file at /media/news/recent.php to change the current news stories

?>

<ul>
<?php echo $new_blurbs;?>
</ul>

<p><?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/tools/ls.php'); ?></p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>