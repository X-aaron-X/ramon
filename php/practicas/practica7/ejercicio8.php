<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        //Guardamos en "$alumnos" con un array push cuatro nombres
        $alumnos = array(); 

        $alumnos[] = "Ramon";
        $alumnos[] = "Jose";
        $alumnos[] = "Pepe";
        $alumnos[] = "Ana";

        //Guardamos en el array "$alumnos1" cuatro nombres
        $alumnos1 = array("Ramon","Jose","Pepe","Ana");

        for ($c=0; $c < count($alumnos); $c++) { //Recorre el array "$alumnos" con un for contando cuantos elementos tiene el array y lo pintamos por pantalla
            echo "$alumnos[$c]<br>";
        }

        foreach ($alumnos1 as $value) { //Recorremos el array "$alumnos1" con un for foreach y lo pintamos por pantalla
            echo "$value<br>";
        }
    ?>
</body>
</html>