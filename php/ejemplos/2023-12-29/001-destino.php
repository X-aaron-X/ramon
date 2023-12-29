<?php
    if (!$_POST) {
        header("location: 001-FormularioDosBotones.php");
    }

    if(isset($_POST["operacion"])) {
        $operaciones = $_POST["numero1"] ?: "";
        $numero1 = $_POST["numero1"] ?: 0;
        $numero2 = $_POST["numero2"] ?: 0;

        $resultado = $operaciones == "sumar" ? "La suma es: " . $numero1 + $numero2 : "La resta es: " . $numero1 - $numero2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?= $resultado ?>
    </div>
</body>
</html>
