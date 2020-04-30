<?php $title='News Stories';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');

//don't edit this file
//edit the file at /media/news/recent.php to change the current news stories

?>

<p>
<strong>Recent news stories are listed on the right. <em>Use the site search (also on the right) to quickly find text from any news story listed below.</em></strong>
</p>

<h4>Complete Listing</h4>
<ul><?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/tools/ls.php'); ?></ul>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
