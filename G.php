<?php

$x = readline('Введите число: ');

$i = 1;

while ($i < $x) {
    $i = $i * 2;
}

echo ($i == $x) ? "YES" : "NO";

?>