<?php
$etime = time();
$addr = $_SERVER['REMOTE_ADDR'];

$hits = 0;
$hitfile = fopen("global/hits", "r");
fscanf($hitfile, "%d", $hits);
fclose($hitfile);

$hits++;
$hitfile = fopen("global/hits", "w");
fprintf($hitfile , $hits);
fclose($hitfile);

$infofile = fopen("global/hitinfo", "a");
fprintf($infofile, "%d %s\n", $etime, $addr);
fclose($infofile);
?>
