<?php
    $base = 20;
    $altura = 26;

    $area = $base * $altura / 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Calcular el área de un triangulo</h1>
    <div>
        <p>
            Base: <?= $base ?> <br>
            Altura: <?= $altura ?> <br>
            Area: <?= $area ?>
        </p>
    </div>
</body>
</html>