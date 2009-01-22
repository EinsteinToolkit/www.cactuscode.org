<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Thorn Documentation';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<ol>
<?php
$files = array();
$dd = opendir(".");
while($file = readdir($dd)) {
    //echo "<li>",$file,"</li>\n";
    if(ereg('\.pdf$',$file))
        $files[] = $file;
}
closedir($dd);
sort($files);
foreach($files as $file) {
    echo "<li><a href='$file'>$file,</li>\n";
}
?>
</ol>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
