<?php
    function coloreHex(): string{
        $colores = "#";

        for ($x = 1; $x < 7; $x++) { 
            $colores .= dechex(mt_rand(0, 15));
        }

        return $colores;
    }

    $color = coloreHex();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - 2</title>
    <style>
        div {
            background-color: <?= $color; ?>;
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
    <div></div>
</body>
</html>