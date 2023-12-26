<?php
    function crear($numero1, &$numero2) {
        $a = 10;
        $b = 5;
        $numero1 = 100;
        $numero2 = 43;
    }


    // creo unas variables fuera de la funcion
    $a = $b = $numero1 = $numero2 = 0;

    // llamo a la funcion
    crear($numero1, $numero2);

    // indica que valor tendra cada variable
    // a --> 0
    // b -> 0
    // numero1 -> 0
    // numero2 -> 43

    // con un var_dump mostremos los valores de las variables
    var_dump($a, $b, $numero1, $numero2);

    crear($a, $b);
    var_dump($a, $b);
