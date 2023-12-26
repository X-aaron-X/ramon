<?php
    $numeros = [1, 2, 3, 4, 5];

    array_map(function($valor) {
        echo $valor * $valor . "\n";
    }, $numeros);