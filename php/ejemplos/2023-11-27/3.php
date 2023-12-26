<?php
    $a = 10;
    $b = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <?php 
        //Quiero que coloquemos los resultados de las siguientes operaciones
        //a+b
        $suma = $a + $b;

        //a-b
        $resta = $a - $b;

        //a*b
        $producto = $a * $b;

        //a resto b
        $resto = $a % $b;

        //a elvevado b
        $elevado = $a ** $b;

        //a dividido entre b
        $dividido = $a / $b;

        //si a es igual a b
        if ($a == $b) {
            $igual = "Es igual";
        }
        else {
            $igual = "No es igual";
        }

        // a menor igual que b

        if ($a <= $b) {
            $menorIgual = "Es menor";
        }
        else {
            $menorIgual = "No es menor igual";
        }

        //colocar una table donde la primera columa es el nombre de la operacion y en la segunda columna el resultado
    ?>
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
                <td> <?= $suma ?> </td>
            </tr>
            <tr>
                <td>Resta</td>
                <td> <?= $resta ?> </td>
            </tr>
            <tr>
                <td>Producto</td>
                <td> <?= $producto ?> </td>
            </tr>
            <tr>
                <td>Resto</td>
                <td> <?= $resto ?> </td>
            </tr>
            <tr>
                <td>Elevado</td>
                <td> <?= $elevado ?> </td>
            </tr>
            <tr>
                <td>Dividido</td>
                <td> <?= $dividido ?> </td>
            </tr>
            <tr>
                <td>Es igual que</td>
                <td> <?= $igual ?> </td>
            </tr>
            <tr>
                <td>Es menor igual que</td>
                <td> <?= $menorIgual ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>