<?php
    spl_autoload_register(function ($clase){
        require "clases/{$clase}.php";
    });

    $coche1 = new Coche('Azul', 5, "Toyota", 10);
    $coche2 = new Coche('Negro', 5, "Ford");

    $coche2->setMarca("Tesla")->setGasolina(5) ;

    var_dump($coche1, $coche2);
    echo $coche2->getGasolina();
