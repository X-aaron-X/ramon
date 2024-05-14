<?php
    use clases\Articulo;
    use clases\ArticuloRebajado;

    include "autoload.php";

    $articulo1 = new Articulo();
    $articulo2 = new ArticuloRebajado('Artículo 2', 19.99, 100);

    $articulo1->setNombre('Artículo 1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?= $articulo1 ?><br>
    <?= $articulo2 ?><br>
    
</body>
</html>