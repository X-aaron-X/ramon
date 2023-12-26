<?php
    $lado1 = 20;
    $lado2 = 22;

    $area = $lado1 * $lado2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Calcular el área de un rectángulo</h1>
    <div>
        <p>
            Lado 1: <?= $lado1 ?> <br>
            Lado 2: <?= $lado2 ?> <br>
            Area: <?= $area ?>
        </p>
    </div>
</body>
</html>