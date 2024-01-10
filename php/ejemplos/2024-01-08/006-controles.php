
<?php
    if(isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"] ?: "";
        $apellidos = implode(" ", $_POST["apellidos"]) ?: "";
        $estadoCivil = $_POST['estadoCivil'] ?? "";
        $aficiones = isset($_POST['aficiones']) ? implode(", ", $_POST['aficiones']) : "No ha seleccionado ninguna afición";

        //var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Controles</title>
</head>
<body>
    <div class="container text-center">
        <form method="post">
            <div class="col-12">
                <h5>Nombre y Apellidos</h5>
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" id="nombre">
            
                <label class="form-label" for="apellido1">Apellido1</label>
                <input class="form-control" type="text" name="apellidos[]" id="apellido1">
            
                <label class="form-label" for="apellido2">Apellido2</label>
                <input class="form-control" type="text" name="apellidos[]" id="apellido2">
            </div>
            <div class="col-12">
                <h5>Estado Civil</h5>
                <input class="form-check-input" type="radio" name="estadoCivil" id="casado" value="casado">
                <label class="form-check-label" for="casado">Casado/a</label>
                <input class="form-check-input" type="radio" name="estadoCivil" id="soltero" value="soltero">
                <label class="form-check-label" for="soltero">Soldero/a</label>
            </div>
            <div class="col-12">
                <h5>Aficiones</h5>
                <input class="form-check-input" type="checkbox" name="aficiones[]" id="deporte" value="deporte">
                <label class="form-check-label" for="deporte">Deporte</label>
                <input class="form-check-input" type="checkbox" name="aficiones[]" id="lectura" value="lectura">
                <label class="form-check-label" for="lectura">Lectura</label>
                <input class="form-check-input" type="checkbox" name="aficiones[]" id="dormrir" value="dormir">
                <label class="form-check-label" for="dormrir">Dormir</label>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
                <button class="btn btn-primary" name="limpiar" type="reset">Limpiar</button>
            </div>
        </form>
    </div>
    
    <?php
        if(isset($_POST["enviar"])) {          
    ?>

    <hr><hr>

    <div>
        <p>Nombre: <?= $nombre ?></p>
        <p>$apellidos: <?= $apellidos ?></p>
        <p>Estado civil: <?= $estadoCivil ?></p>
        <p>Aficiones: <?= $aficiones ?></p>
    </div>

    <?php
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>