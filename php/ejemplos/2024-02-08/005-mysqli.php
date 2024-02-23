<?php
    $contador = 0;

    $conexion = new mysqli('localhost','root','','personas','3307');

    $resultados = $conexion->query("SELECT * FROM  persona");

    while($registro = $resultados->fetch_object()){
        echo "<h2>Registro {$contador}</h2>";

        echo "<ul>
                <li>idPersona: {$registro->idPersona}</li>
                <li>nombre: {$registro->nombre}</li>
                <li>edad: {$registro->edad}</li>
            </ul>";

        $contador++;
    }

    echo "<hr>";

    $resultados->data_seek(0);

    while($registro = $resultados->fetch_object()){
        echo "<h2>Registro {$contador}</h2>";

        echo "<ul>";

        foreach ($registro as $campo => $valor) {
            echo "<li>{$campo}: {$valor}</li>";
        }
                
        echo "</ul>";

        $contador++;
    }


    $conexion->close();