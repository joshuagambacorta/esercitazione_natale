<?php

require './model.php';

$concert = $_POST["concert"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$n_tickets = $_POST["n_tickets"];

$csvfileoutput = $mydir . '/' . $concert . '/' . $concert . '.csv';
$csvfileinfo = $mydir . '/' . $concert . '/info.csv';

$fp = fopen($csvfileoutput, 'a');

fputcsv($fp, array($name, $surname, $n_tickets));

$rows = file($csvfileinfo);
$items = explode(",", $rows[0]);
$items[3] = $items[3] - $n_tickets;
$fp_output = fopen($csvfileinfo, 'w');
$data_to_put = $items[0]. "," .$items[1]. "," .$items[2] . ", "  .$items[3];
file_put_contents($csvfileinfo, $data_to_put)

?>
<head>
    <title>Ringraziamenti</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col text-center">
                <h1><strong><i>LA TUA RICHIESTA È STATA INVIATA CON SUCCESSO.</i></strong></h1>
                <div class="pt-2">
                    <a href="./index.php">
                        <button type="button" class="btn btn-outline-secondary">CLICCA QUI PER TORNARE ALLA HOME</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
