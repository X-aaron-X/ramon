<?php
    //Crear una variable llamada unidades que puede valer 1-100
    //imprimir el descuento que se aplica a la compra funcion de las unidades solicitadas
    //< 10 => 1%
    //>= 10 y < 50 => 2%
    //>= 50 => 10%
    //Realizarlo con switch

    $unidades = rand(1, 100);

    switch(true) {
        case ($unidades < 10):
            echo "1%";
            break;
        case ($unidades < 50):
            echo "2%";
            break;
        case ($unidades >= 50):
            echo "10%";
            break;
        default:
            echo "Error";
            break;
    }