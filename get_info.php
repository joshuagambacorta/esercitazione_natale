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

echo '<h2><strong><i>' . $name_concert . '</strong></h2></i>';
echo '<i>Luogo</i>: ' . $array_info[0][0] . ' <br>';
echo '<i>Data</i>: ' . $array_info[0][1] . ' <br>';
echo '<i>Ora</i>: ' . $array_info[0][2] . ' <br>';
echo '<i>Posti disponibili</i>: ' . $array_info[0][3] . ' <br>';
