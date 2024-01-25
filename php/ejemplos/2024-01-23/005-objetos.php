<?php
    spl_autoload_register(function ($clase){
        require "clases/{$clase}.php";
    });

    $perro1 = new Perro();
    $perro1->nombre = 'Guardian';

    $perro2 = new Perro('Toby');

    var_dump($perro1);