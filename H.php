<?php

$x = readline('Введите число: ');

function isPrime($x) {
    if ($x == 2) {
        return true;
    } elseif (($x % 2 == 0) && ($x !== 2)) {
        return false;
    } else {
        for ($i = 3; $i <= sqrt($x); $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

echo (isPrime($x)) ? "prime" : "composite";

?>