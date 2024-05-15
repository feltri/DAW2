<?php
$publisher_id = 5;
// conecta ao banco de dados e seleciona o Editor
$pdo = require 'connect.php';
// monta a declaração SQL delete
$sql = 'DELETE FROM publishers
WHERE publisher_id = :publisher_id';
// prepara a declaração para execução
$statement = $pdo->prepare($sql);
$statement->bindParam(':publisher_id', $publisher_id,
PDO::PARAM_INT);
// execute the statement
if ($statement->execute()) {
echo 'Editor com id ' . $publisher_id . ' excluído com
sucesso.';
}