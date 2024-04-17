<?php


$vetor = [];
for ($i = 0; $i < 12; $i++) {
    $vetor[$i] = rand(0, 5);
}


echo "Vetor original: ";
foreach ($vetor as $valor) {
    echo $valor . " ";
}
echo "<br>";


$segundo_vetor = $vetor;
for ($i = 0; $i < 12; $i++) {
    if ($segundo_vetor[$i] == 3) {
        $segundo_vetor[$i] = 7;
    }
}


echo "Segundo vetor: ";
foreach ($segundo_vetor as $valor) {
    echo $valor . " ";
}
echo "<br>";

?>
