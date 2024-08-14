<?php

//variaveis 
$salario = 4000;
$hora_extra = 2;

$salario_total = $salario;

// verificaçao 
if ($salario < 2000 && $hora_extra >= 10) {
    $adicional = $salario * 0.20;
    $salario_total += $adicional;
    echo "O salario deste mes foi de R$ " .$salario_total. "<br>";
    echo "Parabens, voce teve 20% a mais do seu salario ";
} else {
    $adicional = $salario * 0.10;
    $salario_total += $adicional;
    echo "O salario deste mes foi de R$ " .$salario_total. "<br>";
    echo "Parabens, voce teve 10% a mais do seu salario ";
}
?>