<?php
    $numeros = [1, 2, 3, 4, 5];

    $salida = array_map(function($numero) {
                return $numero * $numero;
            }, $numeros);

    var_dump($salida);
    var_dump($salida);