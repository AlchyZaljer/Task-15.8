<?php

$x1 = readline('Введите первое число: ');

$x2 = readline('Введите второе число: ');

for ($i = $x1; $i <= $x2; $i++) {
    if ($i % 2 == 0) {
        echo $i, ' ';
    }
}

?>