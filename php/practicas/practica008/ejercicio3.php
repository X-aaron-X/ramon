<?php
    $c = 11;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h5>Introduce un numero: <?= $c ?> </h5>

    <?php
        while ($c > 10) {
            echo "<div>, {$c} ,</div>";
            $c = $c -2;
        }
    ?>
</body>
</html>