<?php

//cria a array
$frutas = array("maçã", "banana", "laranja");
$variavel = "laranja";
//verifica se "banana" esta presente no array $frutas
if (in_array("banana", $frutas)) {
    //se estiver presente exibe uma msg confirmando
    echo "$variavel esta na lista de frutas.";
} else {
    //se nao estiver exibe que nao esta 
    echo "$variavel não esta na lista de frutas.";
}

?>