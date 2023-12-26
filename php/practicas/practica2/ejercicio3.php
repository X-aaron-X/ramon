<?php
    $radio = 2.4;
    $perimetro = 2 * pi() * $radio; //Calcular el perimetro del circulo
    $area = pi() * pow($radio, 2); //Calcular el area del circulo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    El radio del circulo es <?= $radio ?> <br>
    El area del circulo es <?= $area ?> <br>
    El perimetro del circulo es <?= $perimetro ?>
</body>
</html>