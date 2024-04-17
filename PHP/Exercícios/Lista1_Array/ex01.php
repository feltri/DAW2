<?php

setlocale(LC_ALL,"pt_BR");

date_default_timezone_set("Brazil/East");

$data1 = mktime(0,0,0,1,1,2024);
$data2 = new Time();
$dias = ($data - $data2) /60/60/24;

echo('Já se passaram $intervalo dias!');

//http://localhost:8000/lista01/ex-array/ex2.php

echo 'Data 1 = ', date("d-m-y", $data1);
echo 'Data 1 = ', date("d-m-y", $data1);
echo 'Data 1 = ', date("d-m-y", $data1);