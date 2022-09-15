<?php

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
