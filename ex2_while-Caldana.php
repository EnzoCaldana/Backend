<?php
// Definindo a constante para o número máximo
define('NUMERO_MAXIMO', 25);

// Inicializando a variável de contador com o valor do primeiro número ímpar
$contador = 1;

do {
    // Imprimindo o número ímpar atual
    echo $contador . "\n";

    // Incrementando o contador em 2 para o próximo número ímpar
    $contador += 2;
} while ($contador <= NUMERO_MAXIMO);
?>