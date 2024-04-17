<?php


$vetor = [];
for ($i = 0; $i < 50; $i++) {
    $vetor[$i] = rand(1, 50);
}


echo "Vetor antes da divisão: ";
foreach ($vetor as $valor) {
    echo $valor . " ";
}
echo "<br>";


$maior_valor = max($vetor);


for ($i = 0; $i < 50; $i++) {
    $vetor[$i] /= $maior_valor;
}


echo "<br>Vetor após a divisão: ";
foreach ($vetor as $valor) {
    echo $valor . " ";
}
echo "<br>";

?>
