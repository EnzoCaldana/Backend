<?php

for ($i =1; $i <= 10; $i++) {
    echo $i . " ";
    echo ($i % 2 = 0) ? '(inpar)' : '(par)';
    echo " - ";

    switch (true) {
        case ($i >= 1 && $i <= 3);
            echo 'baixo';
            break;
        case ($i >= 4 && $i <= 7);
            echo 'medio';
            break;
        case ($i >= 8 && $i <= 10);
            echo 'alto';
            break;
        default:
            echo 'numero nao reconhecido';

    }
    echo "<br>";
}
?>