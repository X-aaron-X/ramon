<?php
    $a = [
        "Lunes"=> 100,
        "Martes"=> 150,
        "Miercoles"=> 300,
        "Jueves"=> 10,
        "viernes"=> 50
    ];

    $b = "Miercoles";

    if (array_key_exists($b, $a)) { //estaba mal. Primero tendriamos que poner el nombre del indice y luego el array donde lo buscara
        echo $a[$b];
    }
    else{
        echo "no se";
    }