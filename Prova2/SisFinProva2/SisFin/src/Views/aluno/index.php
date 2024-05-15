<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sisfin - Alunos</title>
</head>
<body>
<h1>.:| Lista de Alunos |:.</h1>
<form action="\aluno\turma">
    <label for="turma">Filtrar pela turma: </label>
    <input type="text" name="turma" id="turma" size="10" maxlength="10">
    <input type="submit" name="btnEnviar" value="Filtrar">
</form>
        <ul>
        <?php foreach ($alunos as $aluno): ?>
            <h4>
                <?= $aluno->getNome() ?> - <?= $aluno->getRa() ?> - <?= $aluno->getTurma()?>
            </h4>
        <?php endforeach; ?>
        </ul>
<br>
<a href="/">Home</a>
</body>
</html><?php
