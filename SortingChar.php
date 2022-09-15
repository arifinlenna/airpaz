<?php

function SortingChar(string $string): string
{
    $stringParts = str_split($string);
    sort($stringParts);
    return implode($stringParts);
}

echo SortingChar("maaam");
// echo SortingChar("143255");
