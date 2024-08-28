<?php

// Criação da array
$numeros = range(1, 10);

// Exibi a array original
echo "Array original:";
print_r($numeros);

echo "<br>"; 

// Alterações
$numeros[0] = 100;  // Altera o valor na posição 0 para 100
$numeros[4] = 500;  // Altera o valor na posição 4 para 500
$numeros[9] = 1000; // Altera o valor na posição 9 para 1000

echo "<br>"; 

// Exibi a array apos as alterações
echo "Array apos as alterações:";
print_r($numeros);

?>
