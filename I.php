<?php

$x = readline('Введите число: ');
$n = readline('Введите степень: ');

function power ($x, $n) {
    if ($n == 1) {
        return $x;
    }
    if ($n != 1) {
        return $x * power($x, $n - 1);
    }
}

if ($n == 0) {
    echo "1";
} else {
    echo power($x, $n);
}

?>