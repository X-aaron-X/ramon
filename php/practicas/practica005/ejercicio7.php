<?php
    $dia = 6;

    //Con if
    if ($dia == 1) {
        echo "Lunes";
    }
    else if ($dia == 2) {
        echo "Martes";
    }
    else if ($dia == 3) {
        echo "Miercoles";
    }
    else if ($dia == 4) {
        echo "Jueves";
    }
    else if ($dia == 5) {
        echo "Viernes";
    }
    else if ($dia == 6) {
        echo "Sabado";
    }
    else if ($dia == 7) {
        echo "Domingo";
    }
    else {
        echo "El numero no esta dentro del rango de la semana";
    }
    
    echo "<hr>";

    //Con switch
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sabado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "El numero no esta dentro del rango de la semana";
            break;
    }

    echo "<hr>";

    //Array
    $semanaArray = [
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sabado",
        7 => "Domingo"
    ];

    if (array_key_exists($dia, $semanaArray)) {
        echo $semanaArray[$dia];
    }
    else{
        echo "El numero no esta dentro del rango de la semana";
    }