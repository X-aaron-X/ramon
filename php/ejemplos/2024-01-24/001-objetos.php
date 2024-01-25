<?php
    spl_autoload_register(function ($clase){
        require "clases/{$clase}.php";
    });

    $humano1 = new Humano('Jorge', 'Masculino', '2000-01-01');
    $humano2 = new Humano('Pedro', 'Masculino');
    $humano3 = new Humano('Maria', 'Femenino', '2001-01-01');

    $oficio1 = new Oficio('Programador', 10, 40);
    $oficio2 = new Oficio('Ingeniero', 10, 30);

    $trabajan1 = new Trabajan($humano1, $oficio1);
    $trabajan2 = new Trabajan($humano2, $oficio2);
    $trabajan3 = new Trabajan($humano3, $oficio1);

    echo $trabajan1->persona->presentarse();
    echo $trabajan1->oficio->calcular();
