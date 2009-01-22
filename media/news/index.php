<?php $title='News';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/media/news/recent.php');

//don't edit this file
//edit the file at /media/news/recent.php to change the current news stories

?>

<ul>
<?php echo $new_blurbs;?>
</ul>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>