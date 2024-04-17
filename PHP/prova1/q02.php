<?php

$nro = $_GET["5"];


if($nro != ""){
    echo "O número informado foi " . $nro;
}
else{
    echo "Parâmetros insuficientes!";
}