<?php
    use clases\Imagen;

    include "autoload.php";

    $imagen1 = new Imagen('a.jpg');
    $imagen2 = new Imagen('b.jpg',true, 200, 300);
    $imagen3 = new Imagen('c.jpg', false, 300);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 2</title>
</head>
<body>
    <div>
        <h1>Ejercicio 2</h1>
        <?= var_dump($imagen1) ?><br> 
        <?= var_dump($imagen2) ?><br>
        <?= var_dump($imagen3) ?><br>
    </div>
</body>
</html>