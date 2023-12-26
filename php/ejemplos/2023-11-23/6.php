<?php
    $a = 10;
    $b = "Hola";
    $c = 12.4;
    $d = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <style>
        ul{
            width: 50%;
            margin: 0 auto;
            list-style-type: none;
            display: flex;
            flex-direction: column;
            padding: 0;
            margin-top: 15%;
        }

        li{
            padding: 4%;
            text-align: center;
            font-size: 2em;
            background-color: #d1d0d0;
            margin: 5px;
            border-radius: 15px;
        }

        li:hover {
            background-color: #b9b2c1;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <ul>
        <li><?= $a ?></li>
        <li><?= $b ?></li>
        <li><?= $c ?></li>
        <li><?= $d ?></li>
    </ul>
</body>
</html>