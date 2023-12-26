<?php
    $num = mt_rand(0, 10);

    $res = $num % 2;

    if ($res == 0) {
        echo "El numero \"{$num}\" es par";
    }
    else {
        echo "El numero \"{$num}\" es impar";
    }