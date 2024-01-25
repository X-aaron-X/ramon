<?php
    spl_autoload_register(function ($clase){
        require $clase . ".php";
    });

    $persona1 = new Persona();
    
    $persona1->nombre = "Juan";
    $persona1->apellidos = "Peña";
    $persona1->edad = 25;

    echo $persona1->hablar();