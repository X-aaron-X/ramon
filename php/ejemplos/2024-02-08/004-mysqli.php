<?php
    $contador = 0;

    $conexion = new mysqli('localhost','root','','personas','3307');
    $resultados = $conexion->query("SELECT * FROM  cliente");

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