<?php
//FILE FOR CONNECTION DIR

//name dir
$mydir = 'concerti';

//check if dir exist
if (!file_exists($mydir)) {
    echo "The directory $mydir don't exist";
    exit;
} else {
    //get name and extension of dir
    $myfiles = array_diff(scandir($mydir), array('.', '..'));
}

//declaration array of extyension file
$file = [];

//insert file extension for file in array
foreach ($myfiles as $filename) {
  //get extensione
  $ext = pathinfo($filename, PATHINFO_FILENAME);
  //push extension in array
  array_push($file, $ext);
}

//if is there remove dir from extension possible
array_filter(array_unique($file));

?>