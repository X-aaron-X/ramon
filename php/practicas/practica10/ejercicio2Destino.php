<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 - Destinto</title>
</head>
<body>
    <div>
        <?php
            $numero = $_REQUEST["numero"];

            if ($numero >= 0) {
                echo "El numero \"{$numero}\" es positivo";
            }
            else {
                echo "El numero \"{$numero}\" es negativo";
            }
        ?>
    </div>
</body>
</html>