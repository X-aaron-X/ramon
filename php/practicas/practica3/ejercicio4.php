<?php
    $numeros = [
        "cero"=> 0,
        "uno"=> 1,
        "dos"=> 2,
        "tres"=> 3,
        "cuatro"=> 4,
    ];

    $vocales = ['a','e','i','o','u'];

    //Leer el segundo elementro del array numeros y mostrarlo por pantalla (1)
    echo $numeros['uno'] . "<br>";
    //Leer el segundo elemento del array vocales y mostrarlo en pantalla (e)
    echo $vocales[1] . "<br>";
    //Añadir un elemento al final de la vocales con la a con tilde
    $vocales[] = "á";
    var_dump($vocales);

    //Añadir un elemento nuevo al array numeros con indice cinco con el valor 5
    $numeros["cinco"] = 5;
    var_dump($numeros);