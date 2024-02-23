<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $entero = 10;
        $cadena = "Hola";
        $real = 23.6;
        $logico = TRUE;

        var_dump($entero);
        var_dump($cadena);
        var_dump($real);
        var_dump($logico);

        $logico = (int)$logico; //Se convierte un booleano a un entero
        $entero = (float)$entero; //Se convierte un entero a un float

        settype($logico,"int"); //volvemos a convierle un entero

        var_dump($entero);
        var_dump($cadena);
        var_dump($real);
        var_dump($logico);
    ?>
</body>
</html>