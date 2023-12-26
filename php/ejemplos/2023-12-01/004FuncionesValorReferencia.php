<?php
    // funcion que recibe como argumento un array
    // le suma 1 al primer elemento del array
    // devuelve la suma de todos los elementos
    function tratar(array &$datos): int {
        $suma = 0;
        // calculo la suma de todos los elementos del array
        $suma = array_sum($datos);

        // sumo 1 al primer elemento del array
        $datos[0]++;

        return $suma;
    }


    // probamos la funcion
    $numeros = [1, 3, 5, 7];
    $resultado = 0;

    // con el var_dump mostramos el array original
    var_dump($numeros);

    // llamamos a la funcion y almacenamos el resultado en la variable resultado
    $resultado = tratar($numeros);

    // con un var_dump mostramos las variables numero y resultado
    // ¿porque el array numeros no ha modificado su primer elemento?
    var_dump($numeros);
    var_dump($resultado);