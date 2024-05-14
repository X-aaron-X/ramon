<?php
    use clases\Imagen;

    include "autoload.php";

    $imagen1 = new Imagen('a.jpg');
    $imagen2 = new Imagen('b.jpg');
    $imagen3 = new Imagen('c.jpg');

    $imagen1->setAlto(300)->setAncho(200);
    $imagen2->setAlto(300)->setAncho(200)->setBorder(true);
    $imagen2->setAlto(300);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 3</title>
</head>
<body>
    <div>
        <h1>Ejercico 3</h1>

        <?= $imagen1 ?>
        <?= $imagen2 ?>
        <?= $imagen3 ?>
    </div>
</body>
</html>