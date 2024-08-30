<?php
//criando a array 
$lista_coisas = [];

//criando um array frutas dentro da array lista
$lista_coisas ['frutas'] = ['banana', 'maça', 'morango', 'uva'];

//criando uma array pessoas dentro da array lista
$lista_coisas ['pessoas'] = ['jao', 'jose', 'maria'];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';


//altera o primeiro valor da array 
$lista_coisas ['frutas'][2] = 'abacaxi';

//altera o primeiro valor da array
$lista_coisas ['frutas'][1] = 'melao';

echo "o segundo valor da array FRUTAS agora é: ";
echo $lista_coisas['frutas'][1];

echo "<br>";

echo "o terceiro valor da array agora é: ";
echo $lista_coisas ['frutas'][2];

echo "<hr>";

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo "o segundo valor da array PESSOAS agora é: ";
echo $lista_coisas['pessoas'][1];

?>