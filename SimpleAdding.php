<?php


function SimpleAdding(int $num): int
{
    $result = 0;
    for ($i = 1; $i <= $num; $i++) {
        $result += $i;
    }

    return $result . PHP_EOL;
}


echo SimpleAdding(4);
// echo SimpleAdding(12);
// echo SimpleAdding(140);
