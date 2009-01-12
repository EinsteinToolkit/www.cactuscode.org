<?php
//dynamic breadcrumb links
if ($hide_path!=1)
{
  $bcsep = ' &rarr; '; //text separator between links
  $bcstart = ''; //text first symbol
  $bcend = ''; //text last symbol
  echo '<div id="link-path">';
  $bc=explode("/",$_SERVER["PHP_SELF"]); //array of elements between the slashes
  echo $bcstart.'<a href="/">home</a>';
  while(list($key,$val)=each($bc))
  {
    $dir; //used for link paths
    if($key > 1)
    {
      $n=1;
      while($n < $key)
      {
        $dir.='/'.$bc[$n]; //assemble all elements starting each with a slash
        $val=$bc[$n]; //used for directory name
        $n++;
      }
      if($key < count($bc)-1) echo $bcsep.'<a href="'.$dir.'/">'.$val.'</a>'; //add link
    }
  }
  //if the page is not index.php then link the current directory and echo the page name without the extension
  $current_file=$bc[count($bc)-1];
  if($current_file=='index.php') //it's just an index, don't bother showing the file name
  {
    if($bc[count($bc)-2]=='') //the name would be blank (essentially dealing with root-level or anything else unexpected)
    {
      echo $bcend; //so skip showing anything, endpath
    }
    else //name isn't blank so go ahead and show it
    {
      echo $bcsep.$bc[count($bc)-2].$bcend; //show the current directory name (not as a link), endpath
    }
  }
  else //it must be a subpage (.php file that isn't the directory index)
  {
    //echo directory name, as a link
    echo $bcsep.'<a href=".">'.$bc[count($bc)-2].'</a>';
    //echo page name without three character extension, endpath
    echo $bcsep.substr_replace($current_file, '', -4, strlen($current_file)).$bcend;
  }
echo '</div> <!-- closing path span -->';
}
?>