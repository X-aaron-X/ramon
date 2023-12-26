<?php
    //Si el numero de unidades pedidaas esta entre
    //0-10: descuento 0
    //11-20: descuento 10
    //21-30: descuento 20
    //mayor a igual que 31 : descuento 30

    $numero = 25;
    $descuento = 0;

    // Realizar el ejercicio utilizando if
    if ($numero >= 0 && $numero <= 10) {
        $descuento = 0;
    }
    else if($numero <= 20) {
        $descuento = 10;
    }
    else if($numero <= 30) {
        $descuento = 20;
    }
    else {
        $descuento = 30;
    }

    echo "El descuento es del {$descuento}%";