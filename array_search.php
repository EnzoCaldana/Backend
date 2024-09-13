<?php

//cria a array
$frutas = array("maçã", "banana", "laranja");

//procura o valor "banana" no array $frutas e armazena o indice correspondente na variavel $indice
$indice = array_search("banana", $frutas);
$variavel = "laranja";

//verifica se $indice nao é igual a false
if ($indice !== false) {
    //se estiver presente exibe uma msg confirmando
    echo "$variavel foi encontrada na posiçao: ", $indice;
} else {
    //se "banana" nao foi encontrada, exibe uma msg indicando isso.
    echo "$variavel não esta na lista de frutas.";
}


?>