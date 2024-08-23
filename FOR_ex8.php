
<?php

$soma = 0; // Inicializa a variável que vai armazenar a soma

for ($i = 1; $i <= 100; $i++) {
    $soma_anterior = $soma; // Armazena o valor da soma anterior
    $soma += $i; // Adiciona o valor atual de $i à variável soma
    echo "Soma de $i + $soma_anterior = $soma<br>"; // Exibe o cálculo
}

echo "A soma de 1 até 100 é = $soma";
?>
