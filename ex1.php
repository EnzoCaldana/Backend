<?php

$nota1 = 9;
$nota2 = 9;
$media = ( $nota1 + $nota2 ) /2;

echo "1 semestre: " . $nota1 . '<br>';
echo "2 semestre: " . $nota1 . '<br>';

if ($media >= 7){
    echo 'Aprovado';
}else{ 
    echo 'Reprovado';
}

?>