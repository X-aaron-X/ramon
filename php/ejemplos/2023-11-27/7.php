<?php
    $datos = [[
        "id" => 1,
        "nombre" => "Eva",
    ], [
        "id"=> 2,
        "nombre" => "Adan",
    ]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 7</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
        </tr>
        <tr>
            <td> <?= $datos[0]["id"] ?> </td>
            <td> <?= $datos[0]["nombre"] ?></td>
        </tr>
        <tr>
            <td> <?= $datos[1]["id"] ?></td>
            <td> <?= $datos[1]["nombre"] ?></td>
        </tr>
    </table>
</body>
</html>