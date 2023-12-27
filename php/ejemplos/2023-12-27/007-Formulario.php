<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>007-Formulario</title>
    <link rel="stylesheet" href="estilos-005Formulario.css">
</head>
<body>
    <?php
        if(isset($_GET["mandar"])) {
            //Si para analizar los valores del array $_GET utilizo el operador ternario contraido
            //si las cajas de texto estan vacacias entra a false
            $nombre = $_GET["nombre"] ?: NULL;
            $apellidos = $_GET["apellidos"] ?: NULL;
            $edad = $_GET["edad"] ?: NULL;

            var_dump($_GET);
            var_dump($nombre, $apellidos, $edad);
        }
        else {
            require('_Formulario1.php');
        }
    ?>
</body>
</html>