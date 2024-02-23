<?php
    $vocal = ["a","e","i","o","u"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Destino</title>
</head>
<body>
    <?php
        $caracter = $_REQUEST["caracter"];

        if (in_array($caracter, $vocal)) {
            echo "El caracter \"{$caracter}\" es una vocal";
        }
        else {
            echo "El caracter \"{$caracter}\" no es una vocal";
        }
    ?>
</body>
</html>