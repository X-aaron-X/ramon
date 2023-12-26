<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Destino</title>
</head>
<body>
    <?php
        $num = $_REQUEST["numero"];

        if ($num % 2 == 0) {
            echo "El número \"{$num}\" es par";
        }
        else {
            echo "El número \"{$num}\" es impar";
        }
    ?>
</body>
</html>