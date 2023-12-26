<?php
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $salida = implode("", array_map(function($numero) {
                return "<div>{$numero}</div>";
            }, $numeros));

    var_dump($numeros);
    echo $salida;