<?php
// Loop de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    // Calcula a raiz quadrada do número atual
    $raizQuadrada = sqrt($i);
    
    // Exibe o número e sua raiz quadrada formatada com 2 casas decimais
    echo "A raiz quadrada de $i é " . number_format($raizQuadrada, 2) . "<br>";
}
?>
