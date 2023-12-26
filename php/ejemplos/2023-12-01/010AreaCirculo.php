<?php
    // funcion que recibe como argumento el lado de un rectangulo
    // devuelve el area de ese circulo
    function areaRectangulo(int $lado): float {
        return $lado ** 2;
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
        // genero un rectangulo de lado aleatoria entre 10 y 150
        $lado = mt_rand(10, 150);

        // dibujo el rectangulo
        // aprovecho el ejemplo anterior
        // mando el lado por get en la url
        echo "<img src='009DibujarGD.php?lado={$lado}'>";

        // calculo el area de un rectangulo
        $area = areaRectangulo($lado);

        // mostrar el lado y el area calculada
        ?>
        <ul>
            <li>Lado: <?= $lado ?> </li>
            <li>Area: <?= $area ?> </li>
        </ul>
    </body>
</html>