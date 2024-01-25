<?php
    spl_autoload_register(function ($clase){
        require "clases/{$clase}.php";
    });

    $gato1 = new Gato();
    $gato1->nombre='Pelusa'; //Cabio el nombre que tenia por defecto

    //Creo otro gato con nombre, color y sin pelo como le paso el peso coge el de por defecto que es 5
    $gato2 = new Gato('Botones', 'Blanco', 'No'); 

    var_dump($gato1);
    var_dump($gato2);