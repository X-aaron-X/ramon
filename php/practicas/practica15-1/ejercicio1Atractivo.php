<?php
    require_once 'ejercicio1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 practica 15 - 1</title>
    <link rel="stylesheet" href="ejercicio1Estilos.css">
</head>
<body>
    <?php
        $resultado = phpGames($secuencia);
        
        foreach ($resultado as $rondas => $valores) {
            echo "<ul>";
            echo "<li class='ronda'>$rondas</li>";

            array_walk($valores, function ($valor, $indice) {
                echo "<ul class='partidos'>";
                    echo "<li>$indice</li>";

                    if ($indice == "Ganador") {
                        $valor == null ? $valor = "No hay ganador" : $valor;
                    }

                    echo "<li>$valor</li>";
                echo "</ul>";
            });

            echo "</ul>";
        }
    ?>
</body>
</html>