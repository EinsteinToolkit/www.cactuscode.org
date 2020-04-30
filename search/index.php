<?php
$title='Search Results';
$section='search';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');
?>

<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 550;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>