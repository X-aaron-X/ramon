<?php
    //Cargar la librería 001-arrays.php
    require_once("003-arrays.php");

    //Cargar los datos que estan en datos.php
    include("bbdd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Index 3</title>
</head>
<body>
    <h1>FOREACH - SIN INDICES</h1>
    <?= mostrarDatos($alumnos) ?>

    <br><hr><br>

    <h1>ARRAY_WALK - SIN INDICES</h1>
    <?= mostrarDatosv2($alumnos) ?>

    <br><hr><br>

    <h1>FOREACH - CON INDICES</h1>
    <?= mostrarDatosCabezeras($alumnos) ?>

    <br><hr><br>

    <h1>ARRAY_WALK - CON INDICES</h1>
    <?= mostrarDatosCabezerasV2($alumnos) ?>

    <br><hr><br>

    <h1>DATOS DE LA DB</h1>
    <?= $datos ?>
</body>
</html>