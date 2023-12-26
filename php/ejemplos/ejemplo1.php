<?php
    /*
        Crear variables inicializadas
    */

    //Creo una variable y la inicializo a 1
    $numero = 1;
    $texto = "hola"; //Creando variable de tipo string

    $numero = $numero + 1; //2
    $numero++; //3

    ++$numero; //4

    $numero += 2; //6
    
    echo "La variable número vale " . $numero ."<br>";
    echo "La variable número vale $numero <br>";
    echo 'La variable número vale $numero <br>';
    echo "El texto es {$texto}";