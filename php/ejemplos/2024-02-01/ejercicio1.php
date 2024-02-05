<?php

use clases\ejercicio1\Persona;

require_once "autoload.php";

$objeto = new Persona("Juanito", 20);

// para mostrar toda la informacion
echo $objeto->mostrarInformacion();

// si colocamos toString
echo $objeto;
