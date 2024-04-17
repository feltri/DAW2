<?php
$nome = $_POST["nome"];
$media = $_POST["media"];
$curso = $_POST["curso"];

if(isset($_POST["curso"]) || isset($_POST["btnExcluir"])){
    echo $nome, " = ", $media;
}else{
    echo "Escolha um curso!";
    ?>
    <input type="button" value="Voltar" onclick="history.back()">
    <?php
}

echo $nome, " | ", $curso, " | ", $media;

?>

<br>
<input type="button" value="Voltar" onclick="history.back()">

?>

<!DOCTYPE html>
<!--http://localhost:8000/exemplo1.html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Form HTML</title>
</head>
<body>
    <h2>Cadastro de usuários</h2>

    <form action="form1.php" method="post">
        <input type="text" name="nome" value="<?=$nome?>" placeholder="Nome">
        <br>
        <input type="text" name="media" value="<?=$nome?>" placeholder="Media">
        <br>
        <input type="radio" name="curso" id="" value="DS">
        <input type="radio" name="curso" id="" value="Edificações">
        <input type="radio" name="curso" id="" value="Enfermagem">
        <input type="submit" name="btnEnviar" value="Enviar">
        <input type="submit" name="btnExcluir" value="Excluir">
    </form>
</body>
</html>