<?php
//declaraçao de uma funçao que retorna um valor
function tabuada($numero) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }
}

// chama a funçao
$numero = 2;
echo "Tabuada $numero<br>";
tabuada($numero);
?>