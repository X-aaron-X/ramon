<?php

// array con una serie de numeros enteros
$numeros = [1, 2, 1, 2, 3, 1, 2];

// crear una variable de tipo string con 
// los numeros separador por comas
$csv = "";

// vamos a utilizar dos metodos
// 1 opcion
// recorrer con foreach y concatenar los numeros
// 2 opcion
// utilizar la funcion implode

// 1 opcion
// recorrer con foreach y concatenar los numeros
foreach ($numeros as $indice => $numero) {
    if (array_key_last($numeros) == $indice) {
        $csv .= $numero;
    } else {
        $csv .= $numero . ",";
    }

    // if (count($numeros) - 1 == $indice) {
    //     $csv .= $numero;
    // } else {
    //     $csv .= $numero . ",";
    // }
}

echo $csv;
echo "<br>";


// 2 opcion
// utilizar la funcion implode
$csv = implode(",", $numeros);
echo $csv;
