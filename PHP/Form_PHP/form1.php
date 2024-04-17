<?php
$nome = $_POST["nome"];
$media = $_POST["media"];
$curso = $_POST["curso"];

if(isset($_POST["curso"])){
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