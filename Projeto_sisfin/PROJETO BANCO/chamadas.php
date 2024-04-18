<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>

<!--http://localhost:8000/OOP/projeto_banco/chamadas.php-->

<?php
function defineDados(){
    
}
?>

<?php
require "classes.php";

$cliente = new cliente();
echo "Dados do cliente:<br><br>";
echo "Nome: ", $cliente->getNome();
echo "<br>CPF ou CNPJ: ", $cliente->getCpf_cnpj();
echo "<br>Razão social: ", $cliente->getRazaoSocial();
echo "<br>Nascimento: ", $cliente->getNascimento();
echo "<br>Endereço: ", $cliente->getRua(), ", n° ", $cliente->getNum(), ", bairro ", $cliente->getBairro(), ", ", $cliente->getCidade();
echo "<br>Telefone: ", $cliente->getTelefone();
echo "<br>Celular: ", $cliente->getCelular();
echo "<br>E-mail: ", $cliente->getEmail();
?>

<hr>

<?php
$fornecedor = new fornecedor();
echo "Dados do fornecedor:<br><br>";
echo "Nome: ", $cliente->getNome();
echo "<br>CPF ou CNPJ: ", $cliente->getCpf_cnpj();
echo "<br>Razão social: ", $cliente->getRazaoSocial();
echo "<br>Endereço: ", $cliente->getRua(), ", n° ", $cliente->getNum(), ", bairro ", $cliente->getBairro(), ", ", $cliente->getCidade();
echo "<br>Telefone: ", $cliente->getTelefone();
echo "<br>Celular: ", $cliente->getCelular();
echo "<br>E-mail: ", $cliente->getEmail();

$formaPagamento = new formaPagamento();
?>
    
</body>
</html>

