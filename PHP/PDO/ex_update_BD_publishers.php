<?php
//conecta ao banco de dados bookdb
$pdo = require_once 'connect.php';
$publisher = [
'publisher_id' => 5,
'name' => 'McGraw-Hill Education'
];
$sql = 'UPDATE publishers
SET name = :name
WHERE publisher_id = :publisher_id';
// prepare statement
$statement = $pdo->prepare($sql);
// bind params
$statement->bindParam(':publisher_id',
$publisher['publisher_id'], PDO::PARAM_INT);
$statement->bindParam(':name', $publisher['name']);
// executa a declaração UPDATE
if ($statement->execute()) {
echo 'O editor foi atualizado com sucesso!';
}