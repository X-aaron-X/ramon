<?php
    $conexion = new mysqli('localhost','root','','personas','3307');

    $resultados = $conexion->query("SELECT * FROM  persona");

    /**
     * Quiero para sacar los datos crear solomente un array unifimensinal
    */

    //Crea un array asociativo con el primer registro para ello utilizo fetch_array
    // $registro = $resultados->fetch_array(MYSQLI_ASSOC);

    $contador = 0;

    //Crea un array asociativo con todos los registros
    while($registro = $resultados->fetch_array(MYSQLI_ASSOC)){
        echo "<h2>Registro {$contador}</h2>";

        echo "<ul>
                <li>idPersona: {$registro['idPersona']}</li>
                <li>nombre: {$registro['nombre']}</li>
                <li>edad: {$registro['edad']}</li>
            </ul>";

        $contador++;
    }

    $contador = 0;
    echo "<hr>";

    //Coloar el puntero de los resutados al primer registro de nuevo
    $resultados->data_seek(0);

    while($registro = $resultados->fetch_array(MYSQLI_ASSOC)){
        echo "<h2>Registro {$contador}</h2>";

        foreach ($registro as $campo => $valor) {
            echo "<ul>
                    <li>{$campo}: {$valor}</li>
                </ul>";

        }

        $contador++;
    }

    $conexion->close();