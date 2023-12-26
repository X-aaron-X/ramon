<?php
    //Cargar la librería 001-arrays.php
    require_once("002-arrays.php");

    //Cargar los datos que estan en datos.php
    include("datos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Index 2</title>
</head>
<body>
    <h1>FOREACH</h1>
    <h4>CIUDADES</h4>
    <?= mostrarArray($ciudades) ?>
    <h4>COLORES</h4>
    <?= mostrarArray($colores) ?>
    <h4>EDADES</h4>
    <?= mostrarArray($edades) ?>
    <h4>VALORES</h4>
    <?= mostrarArray($valores) ?>

    <hr>

    <h1>ARRAYWALK</h1>
    <h4>CIUDADES</h4>
    <?= mostrarArrayv2($ciudades) ?>
    <h4>COLORES</h4>
    <?= mostrarArrayv2($colores) ?>
    <h4>EDADES</h4>
    <?= mostrarArrayv2($edades) ?>
    <h4>VALORES</h4>
    <?= mostrarArrayv2($valores) ?>

    <hr>

    <h1>ARRAYMAP</h1>
    <h4>CIUDADES</h4>
    <?= mostrarArrayv3($ciudades) ?>
    <h4>COLORES</h4>
    <?= mostrarArrayv3($colores) ?>
    <h4>EDADES</h4>
    <?= mostrarArrayv3($edades) ?>
    <h4>VALORES</h4>
    <?= mostrarArrayv3($valores) ?>
</body>
</html>