<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>008-Formulario</title>
    <link rel="stylesheet" href="estilos-005Formulario.css">
</head>
<body>
    <?php
        //Quiero que cuando pulse el boton de enviar me sume los dos numeros y me muestre el resultado
        //Si no pulsa el boton de enviar debe cargar el formulario
        //En caso de que los numeros esten vacion se supne que su valor es cero
        if(isset($_GET["enviar"])) {
            $resultado = 0;
            $numero1 = 0;
            $numero2 = 0;

            $numero1 = $_GET["numero1"] ?: 0;
            $numero2 = $_GET["numero2"] ?: 0;
            

            echo "La suma de {$numero1} + {$numero2} es: " . ($numero1 + $numero2);
        }
        else {
            require('_Formulario2.php');
        }
    ?>
</body>
</html>