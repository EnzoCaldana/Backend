<?php

//ex com variavel numerico
/* $idade = 20;
$resultado = ($idade >= 18) ? "maior de idade" : "menor de idade";
echo $resultado; //saida : maior de idade 
*/

/*
$nome = "Ana";
$mensagem = ($nome == "Ana") ? "Ola, ana!" : "Ola, visitante!";
echo $mensagem; // saida: Ola, ana!
*/

$is_logged_in = true;

$mensagem = $is_logged_in ? "Bem vindo de volta!" : "Por favor, faça login.";
echo $mensagem;
echo "<br>";

?>
