<?php
    // funcion que recibe como argumento el radio de un circulo y 
    // devuelve el area de ese circulo
    function areaCirculo(int $radio): float {
        return pi() * $radio ** 2;
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Calcular el area de un circulo de area aleatoria</h1>
        <?php
        // genero un circulo de area aleatoria entre 10 y 150
        $radio = mt_rand(10, 150);

        // dibujo el circulo de ese radio
        // aprovecho el ejemplo anterior
        // mando el radio por get en la url
        echo "<img src='007DibujarGD.php?radio={$radio}'>";

        // calculo el area del circulo
        $area = areaCirculo($radio);

        // mostrar el radio y el area calculada
        ?>
        <ul>
            <li>Radio: <?= $radio ?> </li>
            <li>Area: <?= $area ?> </li>
        </ul>
    </body>
</html>