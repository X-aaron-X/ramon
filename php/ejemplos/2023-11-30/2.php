<?php
    // funcion que recibe un array y devuelve otro array con los elementos que estaban en la primera y en la ultima posicion
    function leer(array $entrada): array {
        $salida = [];

        $salida[] = $entrada[array_key_first($entrada)];
        $salida[] = $entrada[array_key_last($entrada)];

        return $salida;
    }

    // variables
    $datos = [1, 2, 10, 100];
    $salida = [];

    // llamar a la funcion para comprobar el funcionamiento
    // y almacenar el resultado en salida
    $salida = leer($datos);

    // mostrar los datos con la funcion print_r
    echo "<pre>";
    print_r($datos);

    // mostrar el resultado con la funcion print_r
    echo "<pre>";
    print_r($salida);
