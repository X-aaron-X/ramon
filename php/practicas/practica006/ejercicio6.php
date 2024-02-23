<?php
    $dia = 0;

    $mes = [
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    ];

    if (array_key_exists($dia, $mes)) {
        echo $mes[$dia];
    }
    else{
        echo "El mes no es correcto";
    }