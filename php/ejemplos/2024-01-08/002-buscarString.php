<?php
$numero = 1;
$texto = "1,2,3,4,1,2,3";
// contar el numero de veces que sale la variable $numero 
// variable $texto

// for
for ($indice = 0, $repeticiones = 0; $indice < strlen($texto); $indice++) {
    if ($texto[$indice] == $numero) {
        $repeticiones++;
    }
}
echo $repeticiones; // 2

// foreach

// debemos convertir el texto en un array
$textoArray = explode(",", $texto);
$repeticiones = 0;
foreach ($textoArray as $caracter) {
    if ($caracter == $numero) {
        $repeticiones++;
    }
}
echo $repeticiones; // 2

// array_count_values
$repeticiones = [];

// debemos convertir el texto en un array
$textoArray = explode(",", $texto);
$repeticiones = array_count_values($textoArray);
var_dump($repeticiones);
echo $repeticiones[$numero];

// substr_count
$repeticiones = 0;
$repeticiones = substr_count($texto, $numero);
echo $repeticiones;
