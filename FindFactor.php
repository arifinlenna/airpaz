<?php

function FindFactor(int $n): string
{
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0)
            $result .= "$i ";
    }

    return $result;
}

// echo FindFactor(12);
echo FindFactor(140);
