<?php
$hits = 0;
$hitfile = fopen("hits", "r");
fscanf($hitfile, "%d", $hits);
fclose($hitfile);

$hits++;
$hitfile = fopen("hits", "w");
fprintf($hitfile , $hits);
fclose($hitfile);
?>
