<?php

function calcularMediasAprovados($alunos) {
    $aprovados = [];


    foreach ($alunos as $aluno) {
        $nome = $aluno['nome'];
        $media = ($aluno['N1'] + 2 * $aluno['N2']) / 3;

        if ($media >= 6) {
            $aprovados[$nome] = $media;
        }
    }


    ksort($aprovados);

    return $aprovados;
}


$alunos = array(
    array('nome' => 'João', 'N1' => 8, 'N2' => 7),
    array('nome' => 'Maria', 'N1' => 6, 'N2' => 5),
    array('nome' => 'Pedro', 'N1' => 9, 'N2' => 8),
    array('nome' => 'Ana', 'N1' => 7, 'N2' => 6)
);


$aprovados = calcularMediasAprovados($alunos);
echo "Alunos aprovados em ordem alfabética com as médias finais:<br>";
foreach ($aprovados as $nome => $media) {
    echo "$nome: $media<br>";
}

?>
