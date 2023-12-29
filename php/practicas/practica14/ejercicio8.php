<?php
    require_once('ejercicio8Function.php');
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>
    <?php
        $fechaInicio = "";
        $fechaFin = "";

        if (isset($_REQUEST['button'])) {
            $fechaInicio = $_REQUEST['fechaInicio'] ?: "";
            $fechaFin = $_REQUEST['fechaFin'] ?: "";

            $calcularFecha = mostrar_resultados($fechaInicio, $fechaFin);

            echo "<div class='mensaje mensaje-{$calcularFecha[0]}'>{$calcularFecha[1]}</div>";
        }
    ?>
    </div>
    <form method="post" action="ejercicio8.php">
        <div>
            <label for="fechaInicio">Fecha de Inicio</label><br>
            <input type="date" name="fechaInicio" value="<?= $fechaInicio ?>">
            <span class="error"></span>
        </div><br>

        <div>
            <label for="fechaFin">Fecha de Fin</label><br>
            <input type="date" name="fechaFin" value="<?= $fechaFin ?>">
            <span class="error"></span>
        </div><br>

        <button name="button">Calcular</button>
    </form>

    <script src="ejercicio8JavaScript.js"></script>
</body>
</html>