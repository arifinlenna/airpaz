<?php

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


print_r(DifferentNum([1, 2, 3, 4, 5], [1, 3, 4, 5, 6]));
