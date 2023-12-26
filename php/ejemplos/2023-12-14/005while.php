<?php
// CREAMOS DOS VARIABLES 
// MINIMO=2
// MAXIMO=10
// IMPRIMIR DESDE NUMERO MINIMO HASTA MAXIMO CON UN WHILE
// REALIZARLO CON ECHO

// creamos las variables
$minimo = 2;
$maximo = 10;

// inicializar el contador
$contador = $minimo;
// creamos el while
while ($contador <= $maximo) {
    echo $contador;
    echo "<br>";
    // incremento o decremento del contador
    $contador++;
}


// utilizando for
// for ($contador = $minimo; $contador <= $maximo; $contador++) {
//     echo $contador;
//     echo "<br>";
// }
