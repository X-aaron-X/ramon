<?php
    $resultado = "";

    if ($_POST) {
        //Mostrar los datos enviados
        //var_dump($_POST);

        //Creo un string con los colores seleccionados
        $resultado = implode(", ", $_GET["color"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controles</title>
</head>
<body>
    <form method="post">
        <input type="checkbox" name="color[]" id="rojo" value="rojo">
        <label for="rojo">Rojo</label>
        <input type="checkbox" name="color[]" id="azul" value="azul">
        <label for="azul">Azul</label>
        <input type="checkbox" name="color[]" id="verde" value="verde">
        <label for="verde">Verde</label>
        <button>Enviar</button>
    </form>

    <p>Colores seleccionados: <?php echo $resultado; ?></p>
</body>
</html>