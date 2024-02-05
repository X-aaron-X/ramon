<?php
    use clases\Personas;

    require_once "autoload.php";

    $p1 = new Personas("Pedro", "Perez", "1053121010", 1998, "Argentina", "H");
    $p2 = new Personas("Luis", "Leon", "1053223344", 2001, "España", "M");

    echo $p1->datosPersona();
    echo $p2->datosPersona();