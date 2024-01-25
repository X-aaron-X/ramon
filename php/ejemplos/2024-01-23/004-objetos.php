<?php
    spl_autoload_register(function ($clase){
        require "clases/" . $clase . '.php';
    });

    //Instanciamos clases
    $persona1 = new Persona();
    $perro1 = new Perro();
    $gato1 = new Gato();

    var_dump($persona1);
    var_dump($perro1);
    var_dump($gato1);