<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Thorn Documentation';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<ul>
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
$arrangement="";
foreach($files as $file) {
    $parts=explode("-", $file, 2);
    if ($parts[0] != $arrangement) {
      if ($arrangement != "") print "   </li>\n  </ul>\n </li>\n";
      $arrangement = $parts[0];
      echo " <li>".$parts[0]."\n  <ul>\n";
    }
    echo "    <li><a href='$file'>".$parts[1]."</li>\n";
}
?>
   </li>
  </ul>
 </li>
</ul>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
