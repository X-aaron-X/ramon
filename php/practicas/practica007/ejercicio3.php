<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php 
        for ($c = 0; $c < 10; $c++) { //Repite 10 veces su contenido
            echo "{$c} <br>"; 
            echo '{$c} <br>'; //Escribe por pantalla literalmente lo que esta introducido en ''
            echo $c . "<br>";
        }
    ?>
</body>
</html>
