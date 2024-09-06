<?php 

$cadastro = [];
$cadastro ['nome'] = ['enzo', 'cris', 'luiz', 'pedro', 'yuri'];
$cadastro ['email'] = ['enzoabc@gmail.com', 'crisabc@gmail.com', 'luizabc@gmail.com', 'pedroabc@gmail.com', 'yuriabc@gmail.com'];
$cadastro ['nome'] [1] = 'senai';
$cadastro ['email'] [0] = 'aluno@senai.br';
echo $cadastro ['nome'] [1];
echo $cadastro ['email'] [0];
echo '<pre>';
echo '<hr>';
print_r($cadastro);
echo '</pre>';

?>