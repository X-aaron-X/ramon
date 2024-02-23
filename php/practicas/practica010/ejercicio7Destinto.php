<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Destino</title>
</head>
<body>
    <ul>
        <?php
            $num = $_REQUEST["numero"];
            $num2 = $_REQUEST["numero2"];

            echo "<li> La suma es: " . $num + $num2 . "</li>";
            echo "<li> La resta es: " . $num - $num2 . "</li>";
            echo "<li> La producto es: " . $num * $num2 . "</li>";

            if ($num2  != 0) {
                echo "<li> La division es: " . $num / $num2 . "</li>";
            }
            else {
                echo "<li> El numero no es divisible por 0 </li>";
            }
        ?>
    </ul>
</body>
</html>