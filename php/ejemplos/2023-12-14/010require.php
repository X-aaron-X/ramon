<?php
// cargo la libreria 
// es mejor utilizar require_once
require_once 'libreria.php';

// si la intento cargar otra vez no lo hace
require_once 'libreria.php';

// no deberiamos utilizar include
// include 'libreria.php';
// porque si no puede cargar la libreria no tengo las funciones

// quiero saber el numero de veces que se 
// repite el valor 2 en el siguiente vector

$datos = [2, 3, 4, 2, 3, 2, 2];

echo repite(2, $datos);
echo "<hr>";
$caracteres = ['a', 'b', 'c', 'a', 'b', 'a', 'a'];

echo contarVocales($caracteres);
