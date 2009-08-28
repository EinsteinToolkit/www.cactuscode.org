<?php //dynamic breadcrumb links

//do this if hide_path isn't turned on
if ($hide_path!=1)
{
  $bcsep = ' &rarr; '; //text separator between links
  $bcstart = '&rsaquo; <a href="/">home</a>'.$bcsep; //text first symbol
  $bcend = ''; //text last symbol
  echo '<div id= "link-path">';
  
  //array of text between the slashes in the path
  $cpath=explode("/",$_SERVER["PHP_SELF"]);
  //remove blank elements from array
  $cpath=array_filter($cpath);  
  //deal with nondirectory/.php files
  if($cpath[count($cpath)]=='index.php') array_pop($cpath);
  $cpath[count($cpath)]=str_replace('.php','', $cpath[count($cpath)]);
  
  //create an output stack of html formatted links from the cpath array
  $output=array();
  array_push($output, array_pop($cpath)); //no link for current page/directory
  while(count($cpath)>=1)
  {
    array_push($output, makeLink($cpath));
    array_pop($cpath);
  }
  
  //echo the output array
  echo $bcstart;
  while(count($output)>=1)
  {
    echo array_pop($output);
    if (count($output)>=1) echo $bcsep;
  }
  echo $bcend;
  echo '</div> <!-- closing link-path div -->';
}

//takes a "path" array and returns the appropriate html link
function makeLink($array)
{
  $link= '<a href="/';
  //compose the actual link path
  $link=$link.implode('/',$array);
  //return all of that plus the texts (the last element of the array)
  return $link.'">'.array_pop($array).'</a>';
}
?>