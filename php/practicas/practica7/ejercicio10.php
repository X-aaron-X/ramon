<?php
    $numAletorio = [];

    for ($i=0; $i <= 9; $i++) { 
        $numAletorio[$i] = mt_rand(1,100);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        foreach ($numAletorio as $valor) {
            echo "{$valor} <br>";
        }

        echo "<hr>";

        for ($i = 0; $i < count($numAletorio); $i++) {
            echo "$numAletorio[$i] <br>";
        }
    ?>
</body>
</html>