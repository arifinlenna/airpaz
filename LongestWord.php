<?php

function LongestWord(string $n): string
{
    $array = explode(" ", $n);
    $result = "";
    foreach ($array as $candidate) {
        if (strlen($candidate) > strlen($result))
            $result = $candidate;
    }
    return $result;
}


// echo LongestWord("i love music");
echo LongestWord("this music was good");
