<?php


$vetor = [];
for ($i = 0; $i < 40; $i++) {
    $vetor[$i] = rand(1, 50);
}


$menor_valor = min($vetor);


echo "O menor valor encontrado no vetor é: $menor_valor";

?>
