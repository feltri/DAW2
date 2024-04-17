<?php


$vetor1 = [];
$vetor2 = [];
$resultado = [];


for ($i = 0; $i < 10; $i++) {
    $vetor1[$i] = rand(1, 100);
    $vetor2[$i] = rand(1, 100);
}


for ($i = 0; $i < 10; $i++) {
    $resultado[$i] = $vetor1[$i] + $vetor2[$i];
}


echo "Vetor 1: ";
foreach ($vetor1 as $valor) {
    echo $valor . " ";
}
echo "<br>";

echo "Vetor 2: ";
foreach ($vetor2 as $valor) {
    echo $valor . " ";
}
echo "<br>";

echo "Resultado: ";
foreach ($resultado as $valor) {
    echo $valor . " ";
}
echo "<br>";

?>