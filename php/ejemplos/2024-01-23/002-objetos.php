<?php
    //Utilizamos la clase persona
    require_once './Persona.php';

    $persona1 = new Persona();

    $persona1->nombre = "Juan";
    $persona1->apellidos = "Perez";
    $persona1->edad = 25;

    echo $persona1->hablar();