<?php
    spl_autoload_register(function($clase){
        require "{$clase}.php";
    });

    //Voy a utlizar los espacion de nombres para poder tener la misma clase en varias carpetas y asi poder organizar mis clases
    $numeros1 = new clases\profesor\Numeros([1,1,2,2]);
    $numeros2 = new clases\aaron\Numeros([4,3,2,1]);

    var_dump($numeros1, $numeros2);
    
    echo "La media de los numeros es: {$numeros2->calcularMedia()} <br>";
    echo "La moda de los numeros es: {$numeros2->calcularModa()} <br>";
    echo "La mediana de los numeros es: {$numeros2->calcularMediana()} <br>";