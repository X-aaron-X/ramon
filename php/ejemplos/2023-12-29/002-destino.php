<?php
    if (!$_POST) {
        header("location: 002-FormularioTresBotones.php");
    }

    if(isset($_POST["caracter"])) {
        $caracter = $_POST["caracter"] ?: "";
        $texto = $_POST["texto"] ?: "";

        switch ($caracter) {
            case 'a':
            case 'b':
            case 'c':
                $numCaracteres = mb_substr_count(mb_strtolower($texto), $caracter);
                break;
            default:
                $numCaracteres = "Caracter no válido";
                break;
        }
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
        <?= $numCaracteres ?>
    </div>
</body>
</html>