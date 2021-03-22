<?php

$x1 = readline('Введите первое число: ');

$x2 = readline('Введите второе число: ');

$x3 = readline('Введите третье число: ');

if (($x1 >= $x2) && ($x1 >= $x3)) {
    $max = $x1;
} elseif (($x2 >= $x1) && ($x2 >= $x3)) {
    $max = $x2;
} else {
    $max = $x3;
}

echo $max;
