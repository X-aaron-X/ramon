<?php
    $datos = [
        "Nombre" => "Pepe",
        "Apellidos" => null,
        "Edad" => null
    ];

    // $nombre = "Pepe";
    // $apellidos = "Perez";
    // $edad = "no conocida";

    //quiero realizarlo con el operador ternario recortado elvis
    $nombre = $datos["Nombre"] ?: "No conocido";
    $apellidos = $datos["Apellidos"] ?: "No conocido";
    $edad = $datos["Edad"] ?: "No conocido";
    
    echo "<h2>TERNARIO - ELVIS</h2>";
    echo "Nombre: $nombre <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Edad: $edad <br>";

    echo "<br><hr>";

    //Opcion 2
    echo "<h2>TERNARIO - ELVIS - FOREACH</h2>";
    foreach ($datos as $indice => $valor) {
        $valor = $valor ?: "No conocido";
        
        echo "$indice: $valor <br>";
    }

    echo "<br><hr>";

    //Quiero realizarlo con el operador ternario null
    $nombre = $datos["Nombre"] ?? "No conocido";
    $apellidos = $datos["Apellidos"] ?? "No conocido";
    $edad = $datos["Edad"] ?? "No conocido";

    echo "<h2>TERNARIO - NULL</h2>";
    echo "Nombre: $nombre <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Edad: $edad <br>";

    echo "<br><hr>";

    //Opcion 2
    echo "<h2>TERNARIO - NULL - FOREACH</h2>";

    foreach ($datos as $indice => $valor) {
        $valor = $valor ?? "No conocido";

        echo "$indice: $valor <br>";
    }
