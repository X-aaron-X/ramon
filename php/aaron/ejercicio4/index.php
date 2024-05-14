<?php
    use clases\Imagen;

    include "autoload.php";

    $imagen1 = new Imagen('a.jpg');

    $imagen1->setSrc('no existe.jpg');
    $imagen1->setBorder(3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico </title>
</head>
<body>
    <div>
        <h1>Ejercico 4</h1>

        <?= $imagen1 ?>
    </div>
</body>
</html>