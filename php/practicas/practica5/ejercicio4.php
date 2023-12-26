<?php
    $a = [
        "Lunes"=> 100,
        "Martes"=> 150,
        "Miercoles"=> 300,
        "Jueves"=> 10,
        "viernes"=> 50
    ];

    $b = "Lunes";

    switch ($b) {
        case 'Lunes':
            echo $a["Lunes"]; //saldria por aqui
            break;
        case 'Martes':
            echo $a["Martes"];
            break;
        case 'Miercoles':
            echo $a["Miercoles"];
            break;
        case 'Jueves':
            echo $a["Jueves"];
            break;
        case 'viernes':
            echo $a["viernes"];
            break;
        default:
            echo "no se";
            break;
    }