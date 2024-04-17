<?php
$valores = array();
$cont = 0;
$procurado = array();

function mostra($v){
    echo $v, " - ";
}

while($cont++<=20){
    arrar_push($valores, random_int(0,5));
}

echo "Conteúdo do array: ";
array_map("mostra", $valores);

$procurado = array_keys($valores,3);

echo "Ocorrências do valor 3 = ", count($procurado);

?>