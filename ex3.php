<?php

//define as variaveis 
$compra = '500';
$desconto = '10';
$vip = '1';

//chama as variaveis 
echo "sua compra foi de $compra <br/>";

//faz o verdadeeiro ou falso 
if ($compra >= 500.00){
    //informa o valor final
    echo "cliente com desconto de $desconto % ";
}else if ($vip = 1){
    echo "cliente com desconto de $desconto % ";
}else{
    //informar o valor final 
    echo "cliente sem desconto";
}

?>