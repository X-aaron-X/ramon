<?php
    spl_autoload_register(function ($clase) {
        require "{$clase}.php";
    });

    $numeros1 = new clases\profesor\Numeros([1,1,2,2,3,1,2]);

    var_dump($numeros1);

    echo $numeros1->calcularModa();

    $numeros1 = new clases\profesor\Numeros([1, 1, 2, 2, 3]);

    var_dump($numeros1);

    echo $numeros1->calcularModa();

    
