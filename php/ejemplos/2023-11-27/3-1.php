<?php
    $a = 10;
    $b = 3;

    $operaciones = [
        "Sumar"=> $a + $b,
        "Restar"=> $a - $b,
        "Producto"=> $a * $b,
        "Resto"=> $a + $b,
        "Elevado"=> $a % $b,
        "Dividido"=> $a / $b,
    ];

    if ($a == $b) {
        $operaciones["Igual"] = "Es igual";
    }
    else {
        $operaciones["Igual"] = "No es igual";
    }

    if ($a <= $b) {
        $operaciones["menorIgual"] = "Es menor";
    }
    else {
        $operaciones["menorIgual"] = "No es menor igual";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
<table border="1" style="width: 100%;">
        <thead style="background-color: indianred;">
            <tr>
                <th>Operacion</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody style="text-align: center; background-color: #cba6a6">
            <tr>
                <td>Suma</td>
                <td> <?= $operaciones["Sumar"] ?> </td>
            </tr>
            <tr>
                <td>Resta</td>
                <td> <?= $operaciones["Restar"] ?> </td>
            </tr>
            <tr>
                <td>Producto</td>
                <td> <?= $operaciones["Producto"] ?> </td>
            </tr>
            <tr>
                <td>Resto</td>
                <td> <?= $operaciones["Resto"] ?> </td>
            </tr>
            <tr>
                <td>Elevado</td>
                <td> <?= $operaciones["Elevado"] ?> </td>
            </tr>
            <tr>
                <td>Dividido</td>
                <td> <?= $operaciones["Dividido"] ?> </td>
            </tr>
            <tr>
                <td>Es igual que</td>
                <td> <?= $operaciones["Igual"] ?> </td>
            </tr>
            <tr>
                <td>Es menor igual que</td>
                <td> <?= $operaciones["menorIgual"] ?> </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>