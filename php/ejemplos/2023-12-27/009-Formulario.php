<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>009-Formulario</title>
    <link rel="stylesheet" href="estilos-005Formulario.css">
</head>
<body>
    <?php
        if(isset($_GET["sumar"]) || isset($_GET["restar"])) {
            $resultado = 0;
            $numero1 = 0;
            $numero2 = 0;

            $numero1 = $_GET["numero1"] ?: 0;
            $numero2 = $_GET["numero2"] ?: 0;

            $resultado = isset($_GET["sumar"]) ? "La suma es: " . $numero1 + $numero2 : "La resta es: " . $numero1 - $numero2;

            echo $resultado;
        }
        else {
            require('_Formulario3.php');
        }
    ?>
</body>
</html>