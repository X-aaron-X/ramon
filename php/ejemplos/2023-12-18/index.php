<?php
    //Cargar la librería 001-arrays.php
    require_once("001-arrays.php");

    //Cargar los datos que estan en datos.php
    include("datos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Formas de recorrer el Array</h1>
    <h2 align="center">FOR</h2>

    <?php
        echo recorrer($ciudades);
        echo recorrer($edades);
    ?>

    <hr>
    <h2 align="center">FOR - CON ARRAY_VALUES</h2>

    <?php
        echo recorrerV1($ciudades);
        echo recorrerV1($colores);
        echo recorrerV1($edades);
        echo recorrerV1($valores);
    ?>

    <hr>
    <h2 align="center">FOREACH</h2>

    <?php
        echo recorrer2($ciudades);
        echo recorrer2($colores);
        echo recorrer2($edades);
        echo recorrer2($valores);
    ?>

    <hr>
    <h2 align="center">WHILE - CON ARRAY_VALUES</h2>
    
    <?php
        echo recorrer3($ciudades);
        echo recorrer3($colores);
        echo recorrer3($edades);
        echo recorrer3($valores);
    ?>

<hr>
    <h2 align="center">ARRAY_WALK</h2>
    
    <?php
        echo recorrer4($ciudades);
        echo recorrer4($colores);
        echo recorrer4($edades);
        echo recorrer4($valores);
    ?>

    <h2 align="center">ARRAY_WALK - IMPLODE</h2>
    
    <?php
        echo recorrer4V1($ciudades);
        echo recorrer4V1($colores);
        echo recorrer4V1($edades);
        echo recorrer4V1($valores);
    ?>

    <h2 align="center">ARRAY_MAP - IMPLODE</h2>
    
    <?php
        echo recorrer5($ciudades);
        echo recorrer5($colores);
        echo recorrer5($edades);
        echo recorrer5($valores);
    ?>
</body>
</html>