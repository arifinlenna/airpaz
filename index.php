<?php


function SimpleAdding(int $num): int
{
    $result = 0;
    for ($i = 1; $i <= $num; $i++) {
        $result += $i;
    }

    return $result . PHP_EOL;
}


// echo SimpleAdding(4);
// echo SimpleAdding(12);
// echo SimpleAdding(140);


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
// echo FindFactor(140);


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

// echo LongestWord("this music was good");


function ReverseWord(string $n): string
{
    $result = "";
    for ($i = strlen($n) - 1; $i > 0; $i--) {
        $result .= $n[$i];
    }

    return $result;
}

// echo ReverseWord("this music was good");


function SortingChar(string $string): string
{
    $stringParts = str_split($string);
    sort($stringParts);
    return implode($stringParts);
}

// echo SortingChar("143255");


function DifferentNum(array $data, array $data2): array
{
    $result = [];
    foreach ($data as $key => $value) {
        if (!in_array($value, $data2, true)) {
            array_push($result, $value);
        }
    }
    foreach ($data2 as $key => $value) {
        if (!in_array($value, $data, true)) {
            array_push($result, $value);
        }
    }
    return $result;
}


// print_r(DifferentNum([1, 2, 3, 4, 5], [1, 3, 4, 5, 6]));


function PrintStar()
{
    for ($i = 15; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
}
PrintStar();
