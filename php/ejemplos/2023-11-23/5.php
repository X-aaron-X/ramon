<?php
    $nombre = "Benito";
    $edad = 34;
    $poblacion = "Santander";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <style>
        table{
            width: 70%;
            text-align: left;
            background-color: #f3f3f3;
            margin: 0 auto;
            margin-top: 20%;
            box-shadow: 5px 2px 5px 0px rgb(0 0 0 / 42%);
            border-collapse: collapse;
            border-style: hidden;
        }

        td{
            padding: 2%;
        }

        .titulo{
            font-weight: 600;
        }

        .datos{
            background-color: #c3b9d1;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td class="titulo">Nombre</td>
            <td class="datos"><?= $nombre ?></td>
        </tr>
        <tr>
            <td class="titulo">Edad</td>
            <td class="datos"><?= $edad ?></td>
        </tr>
        <tr>
            <td class="titulo">Poblacion</td>
            <td class="datos"><?= $poblacion ?></td>
        </tr>
    </table>
</body>
</html>