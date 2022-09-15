<?php

function ReverseWord(string $n): string
{
    $result = "";
    for ($i = strlen($n) - 1; $i > 0; $i--) {
        $result .= $n[$i];
    }

    return $result;
}

echo ReverseWord("this music was good");
