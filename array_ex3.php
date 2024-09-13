<?php

$nome = array('luna', 'lucas', 'daniel', 'felipe', 'sofia', 'clara', 'bruno', 'tereza', 'hugo', 'miguel');

$item_escolhido = 'hugo';

$indice = array_search($item_escolhido, $nome)

if($indice !== false){
    echo "o $item_escolhido esta na lista";
    echo '<br>';
    echo "$item_escolhido esta na posição 8";
} else {
    echo "o $item_escolhido nao esta na lista";
}

?>