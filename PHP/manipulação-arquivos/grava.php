<?php
$arquivo = "dados.dat";

$autor = "<br>Monique Caroline Feltri<br>";

if(!$handle = fopen($arquivo, 'a')){
    echo "Não foi possível abrir o arquivo ($arquivo)!";
    exit;
}

if(fwrite($handle, $autor) === FALSE){
    echo "Não foi possível escrever no arquivo ($arquivo)!";
    exit;
}

echo "Sucesso!";
fclose($handle);

//http://localhost:8000/manipula%C3%A7%C3%A3o-arquivos/grava.php