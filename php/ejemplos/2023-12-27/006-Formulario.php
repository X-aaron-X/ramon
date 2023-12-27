<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>006-Formulario</title>
    <link rel="stylesheet" href="estilos-005Formulario.css">
</head>
<body>
    <?php
        if(isset($_GET["mandar"])) {
            var_dump($_GET);
        }
        else {
            require('_Formulario1.php');
        }
    ?>
</body>
</html>