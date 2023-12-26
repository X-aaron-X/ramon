<?php
    $numeros = [1, 2, 3, 4, 5];


    // foreach ($numeros as $indice => $numero) {
    //     $numeros[$indice] = $numero * $numero;
    // }

    // foreach ($numeros as &$numero) {
    //     $numero = $numero * $numero;
    // }

    array_walk($numeros, function(&$numero, $indice) {
        $numero = $numero * $numero;
    });


    var_dump($numeros);