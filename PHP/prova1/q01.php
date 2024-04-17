<?php
$ra = "201096";
$n1 = "7";
$n2 = "9";
$media = ($n1 + $n2)/2;

echo "RA = " . $ra;
echo "<br>Nota 1 = " . $n1;
echo "<br>Nota 2 = " . $n2;
echo "<br>Média = " . $media;

if($media > 6){
    echo "<br>APROVADO";
}
if($media >= 4 && $media < 6){
    echo "<br>RECUPERAÇÃO";
}
else{
    echo "<br>REPROVADO";
}