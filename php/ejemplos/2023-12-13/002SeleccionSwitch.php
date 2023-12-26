<?php
    //Crear una varibale llamada colores que puede valor
    //R , V, A
    //Imprimir las siguientes valores en funcion del color
    //R => Rojo
    //V => Verde
    //A => Azul
    //Realizarlo con switch

    $color = "A";
    switch($color){
        case "R":
            echo "Rojo";
        break;
        case "V":
            echo "Verde";
        break;
        case "A":
            echo "Azul";
        break;
        default:
            echo "No existe el color";
        break;
    }