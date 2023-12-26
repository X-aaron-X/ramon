<?php
    $tiradas = [];

    //simular 3 tiradas
    $tiradas[] = mt_rand(1,6);
    $tiradas[] = mt_rand(1,6);
    $tiradas[] = mt_rand(1,6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <ul>
        <li> <?= $tiradas[0] ?> </li>
        <li> <?= $tiradas[1] ?> </li>
        <li> <?= $tiradas[2] ?> </li>
    </ul>

    <img src="dados/<?= $tiradas[0] ?>.svg">
    <img src="dados/<?= $tiradas[1] ?>.svg">
    <img src="dados/<?= $tiradas[2] ?>.svg">
</body>
</html>