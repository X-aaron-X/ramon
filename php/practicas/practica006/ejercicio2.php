<?php
    $a = 10;
    $b = 20;

    $operaciones = [
        "Suma"=> $a + $b,
        "Producto"=> $a * $b,
        "Resta"=> $a - $b,
        "Cociente"=> $a / $b,
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Numero1: <?= $a ?></h1>
    <h1>Numero2: <?= $b ?></h1>

    <ul>
        <?php
            foreach ($operaciones as $indice => $valor) {
                echo "<li> {$indice}: $valor </li>";
            }
        ?>
    </ul>
</body>
</html>