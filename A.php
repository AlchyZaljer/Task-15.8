<?php

$x1 = readline('Введите первое число: ');

$x2 = readline('Введите второе число: ');

if ($x1 > $x2) {
    $max = $x1;
} else {
    $max = $x2;
}

echo $max;

?>