<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio6</title>
</head>
<body>
    <?php
        $alumno1 = "Ramon";
        $alumno2 = "Jose";
        $alumno3 = "Pepe";
        $alumno4 = "Ana";

        echo $alumno1; //Ramnon y Jose lo muestra juntos poque no hay un salto de linea o un especio entre medias
        echo $alumno2; 
        echo "<br>";
        echo "$alumno3";
        echo "<br>";
        echo "$alumno4";
    ?>

    <div>
        <?php
            echo "$alumno1<br>$alumno2<br>$alumno3<br>$alumno4"; //Muestra todos los alumnos con un salto de linea entre cada uno de ellos
        ?>
    </div>
</body>
</html>
