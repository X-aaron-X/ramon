<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Destino</title>
</head>
<body>
    <table border="1" style="width: 100%;border-style: double;border-collapse: collapse;">
        <tr>
            <td>Nombre</td>
            <td><?= $_REQUEST["nombre"] ?></td>
        </tr>
        <tr>
            <td>Color</td>
            <td><?= $_REQUEST["color"] ?></td>
        </tr>
        <tr>
            <td>Alto</td>
            <td><?= $_REQUEST["alto"] ?></td>
        </tr>
        <tr>
            <td>Peso</td>
            <td><?= $_REQUEST["peso"] ?></td>
        </tr>
    </table>
</body>
</html>