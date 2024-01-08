<?php
    $resultado = "";

    if ($_POST) {
        //Mostrar los datos enviados
        var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form method="post">
        <input type="radio" name="color" id="rojo" value="rojo">
        <label for="rojo">Rojo</label>  
        <input type="radio" name="color" id="azul" value="azul">
        <label for="azul">Azul</label>
        <input type="radio" name="color" id="verde" value="verde">
        <label for="verde">Verde</label>
        <button>Enviar</button>
    </form>
</body>
</html>