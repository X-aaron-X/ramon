<?php
    $tiradas = [];

    //simular 3 tiradas de dos dados
    // $tiradas[0]["dado1"] = mt_rand(1,6);
    // $tiradas[0]["dado2"] = mt_rand(2,6);
    // $tiradas[1]["dado1"] = mt_rand(1,6);
    // $tiradas[1]["dado2"] = mt_rand(2,6);
    // $tiradas[2]["dado1"] = mt_rand(1,6);
    // $tiradas[2]["dado2"] = mt_rand(2,6);
    
    $tiradas[] = [
        "dado1"=> mt_rand(1,6),
        "dado2"=> mt_rand(1,6),
    ];

    $tiradas[] = [
        "dado1"=> mt_rand(1,6),
        "dado2"=> mt_rand(1,6),
    ];

    $tiradas[] = [
        "dado1"=> mt_rand(1,6),
        "dado2"=> mt_rand(1,6),
    ];
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
        <li> <?= $tiradas[0]["dado1"] ?> </li>
        <li> <?= $tiradas[0]["dado2"] ?> </li>
    </ul>

    <ul>
        <li> <?= $tiradas[1]["dado1"] ?> </li>
        <li> <?= $tiradas[1]["dado2"] ?> </li>
    </ul>

    <ul>
        <li> <?= $tiradas[2]["dado1"] ?> </li>
        <li> <?= $tiradas[2]["dado2"] ?> </li>
    </ul>

    <div>
        <img src="dados/<?= $tiradas[0]["dado1"] ?>.svg">
        <img src="dados/<?= $tiradas[0]["dado2"] ?>.svg">
    </div>

    <div>
        <img src="dados/<?= $tiradas[1]["dado1"] ?>.svg">
        <img src="dados/<?= $tiradas[1]["dado2"] ?>.svg">
    </div>

    <div>
        <img src="dados/<?= $tiradas[2]["dado1"] ?>.svg">
        <img src="dados/<?= $tiradas[2]["dado2"] ?>.svg">
    </div>
</body>
</html>