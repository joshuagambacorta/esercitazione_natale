<?php

require './model.php';

$name_concert = $_POST['concerto'];

$csvfileoutput = $mydir . '/' . $name_concert . '/info.csv';

$file_concert = fopen($csvfileoutput, 'r');
$array_info = [];

while (($line = fgetcsv($file_concert)) !== FALSE) {
    array_push($array_info, $line);
}

fclose($file_concert);

$n_ticket = $array_info[0][3];

echo $n_ticket;
