<?php
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $salida = "";

    // array_walk($numeros, 
    //     function(&$numero) {
    //         $numero = "<div>{$numero}</div>";
    // });

    // $salida = implode("", $numeros);

    array_walk($numeros, 
        function($numero, $indice) use (&$salida) {
            $salida .= "<div> {$numero} </div>";
    });

    echo $salida;
    var_dump($numeros);