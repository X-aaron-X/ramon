<?php 
    //simular cada tirada de un dado utilizado la funcion mt_rand(1,6)

    $tiradas = [[
        mt_rand(1,6),
        mt_rand(1,6),
    ],[
        mt_rand(1,6),
        mt_rand(1,6),
    ]];

    $tiradas[] = [
        mt_rand(1,6),
        mt_rand(1,6),
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Dado 1</td>
            <td>Dado 2</td>
        </tr>
        <tr>
            <td> <?= $tiradas[0][0] ?> </td>
            <td> <?= $tiradas[0][1] ?> </td>
        </tr>
        <tr>
            <td> <?= $tiradas[1][0] ?> </td>
            <td> <?= $tiradas[1][1] ?> </td>
        </tr>
        <tr>
            <td> <?= $tiradas[2][0] ?> </td>
            <td> <?= $tiradas[2][1] ?> </td>
        </tr>
    </table>
</body>
</html>