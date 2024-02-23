<?php
    use clases\Persona;

    require_once 'autoload.php';

    $conexion = new mysqli('localhost','root','','personas','3307');
    $resultados = $conexion->query("SELECT * FROM  persona");

    $contador = 1;

    while ($registro = $resultados->fetch_object("clases\Persona")) {
        echo "<h2>Registro numero {$contador}</h2>";

        echo $registro;
        $contador++;
    }

    // con constructor
    // var_dump(new Persona(["idPersona" => 1, "nombre" => "Pepe"]));
    // con o sin constructor
    // $a=new Persona();
    // $a->idPersona = 1;
    // $a->nombre = "Pepe";


    $conexion->close();
    