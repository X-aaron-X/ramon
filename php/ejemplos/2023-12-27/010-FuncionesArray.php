<?php
    $a = [
        "nombre" => "Ramon",
        "apellidos" => "Abramo",
    ];

    //Devuelve la creacion del array como un string
    $b = var_export($a, true);

    //convierter un array a string con un caracter de separacion
    $c = implode(",", $a);

    //Crear variables con los indices del array asociativo
    extract($a);
    //extract($a, EXTR_PREFIX_ALL, "db");

    //Crear variables con los indices del array asociativo
    // foreach ($a as $indice => $valor) {
    //     $$indice = $valor;
    // }

    var_dump($a);
    var_dump($b);
    var_dump($nombre, $apellidos);
    //var_dump($db_nombre, $db_apellidos);