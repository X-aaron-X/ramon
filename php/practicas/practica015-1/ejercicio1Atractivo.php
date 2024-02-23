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
            echo "<ul class='principal'>
                    <div class='header'>
                        <li class='ronda'>{$rondas}</li>";
                            array_walk($valores, function ($valor, $indice) {
                                echo "<div class='body'>
                                        <ul class='partidos'>
                                            <li class='indice'><b>{$indice}</b></li>";

                                            if ($indice == "Ganador") {
                                                $valor == null ? $valor = "No hay ganador" : $valor;
                                            }

                                            echo "<li class='valor'>{$valor}</li>
                                        </ul>
                                    </div>";
                            });
            echo "</ul>";
        }
    ?>
    <script src="ejercicio1JavaScript.js"></script>
</body>
</html>