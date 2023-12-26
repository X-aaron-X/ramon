<?php
    //Crear una variable llamada numero que puede valer entre
    //Calcular aletoriamente 1-100(numero entero)
    //Imprimir
    //"Alpe" si el numero es multiplo de 3
    //"POO" si el numero es multiplo de 5
    //"Alpe POO" si el numero es multiplo de 3 y 5
    //hacerlo con sitch

    $numero = rand(1,100);

    echo "<h1> {$numero} </h1>";
    
    switch (true) {
        case $numero % 3 == 0:
            echo "Alpe";
            break;
        case $numero % 5 == 0:
            echo "POO";
            break;
        case $numero % 3 == 0 && $numero % 5 == 0:
            echo "Alpe POO";
            break;
        default:
            echo "Error";
            break;
    }