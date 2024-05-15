<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>

    <style type="text/css">
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<?php
function find_book_by_title(\PDO $pdo, string $keyword):
array
{
$pattern = '%' . $keyword . '%';
$sql = 'SELECT book_id, title
FROM books
WHERE title LIKE :pattern';
$statement = $pdo->prepare($sql);
$statement->execute([':pattern' => $pattern]);
return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// conecta ao banco de dados
$pdo = require 'connect.php';
// procura livros cujo título contenha ‘bra’
$books = find_book_by_title($pdo, 'bra');
foreach ($books as $book) {
echo $book['title'] . '<br>';
}
?>

</body>
</html>

