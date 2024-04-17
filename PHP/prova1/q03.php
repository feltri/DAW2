<?php
$ra = $_GET['201096'];

if (strlen($ra) == 6){
    echo "Login realizado com sucesso!";
}
if (strlen($ra) < 6){
    echo "Número de dígitos menor do que o exigido!";
}
if (strlen($ra) > 6){
    echo "Número de dígitos superior ao exigido!";
}
if (strlen($ra) == -1){
    echo "Parâmetros insuficientes!";
}