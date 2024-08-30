<?php

//cria a array
$Cadastro = [];

//cria as arrays dentro do cadastro
$Cadastro ['Usuario'] = ['Joao', 'maria', 'pedro'];
$Cadastro ['Senha'] = ['1234', 'abcd', '5678'];

echo "<br>";

//exibe a array
echo '<pre>';
print_r($Cadastro);
echo '</pre>';

echo "<br>";

//altera a array 
$Cadastro ['Usuario'][1] = 'Ana';
$Cadastro ['Senha'][1] = 'efgh';

echo "<br>";

//exibe a array
echo '<pre>';
print_r($Cadastro);
echo '</pre>';

echo "Usuario 2 agora é:";
echo $Cadastro['Usuario'][1];

echo "<br>";

echo "Senha 2 agora é:";
echo $Cadastro['Senha'][1];