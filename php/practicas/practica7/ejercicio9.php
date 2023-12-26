<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $v5 = array(0, 1, 0, 1, 0);

        foreach ($v5 as $key => $value) { //Recorremos el array con un foreach cogiendo su indice y su valor
            echo "<br>\$v5{$key}=$value";  //Pintamos por pantalla el indice y su valor
        }

        for ($c=0; $c < count($v5); $c++) { //Recorre el array con un for contando cuantos elementos tiene el array
            echo "<br>\$v5{$c}=$v5[$c]"; //Pintamos por pantalla el la posicion del array y su valor
        }

    ?>
</body>
</html>