<?php
    //Mostrar el ultimo numero introducido en el formulario del ejercicio 1 es decir el numero almacenado en la variable de sesion
    session_start();
    $numero = "";

    if (isset($_SESSION["numero"])) {
        $numero = $_SESSION["numero"];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>002 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <div>
            <p class="fs-3"><?= $numero ?></p>
        </div>
    </div>
</body>
</html>