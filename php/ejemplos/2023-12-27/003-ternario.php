<?php
    $datos = [
        "Nombre" => "Pepe",
        "Apellidos" => "Perez",
        "Edad" => null
    ];

    // $nombre = "Pepe";
    // $apellidos = "Perez";
    // $edad = "no conocida";

    //utilizar el operador if/else junto con la funcion isset
    echo "<h2>IF/ELSE - ISSET</h2>";

    if (isset($datos["Nombre"])) {
        $nombre = $datos["Nombre"];
    }
    else {
        $nombre = "No conocido";
    }

    if (isset($datos["Apellidos"])) {
        $apellidos = $datos["Apellidos"];
    }
    else {
        $apellidos = "No conocido";
    }

    if (isset($datos["Edad"])) {
        $edad = $datos["Edad"];
    }
    else {
        $edad = "No conocido";
    }

    echo "Nombre: $nombre <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Edad: $edad <br>";

    echo "<br><hr>";

    //con if/else ternario
    echo "<h2>IF/ELSE - TERNARIO</h2>";
    $nombre = (isset($datos["Nombre"])) ? $datos["Nombre"] : "No conocido";
    $apellidos = (isset($datos["Apellidos"])) ? $datos["Apellidos"] : "No conocido";
    $edad = (isset($datos["Edad"])) ? $datos["Edad"] : "No conocido";

    echo "Nombre: $nombre <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Edad: $edad <br>";

    echo "<br><hr>";

    //Opcion 2
    echo "<h2>FOREACH - IF/ELSE - TERNARIO</h2>";
    foreach ($datos as $indice => $valor) {
        $valor = (isset($valor)) ? $valor : "No conocido";
        
        echo "$indice: $valor <br>";
    }