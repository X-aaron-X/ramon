<?php
    //Crear un formulario que perimta introducir un numero y almacenar ese numero en una variable de session
    session_start();

    if(isset($_POST['enviar'])) {
        $_SESSION['numero'] = $_POST['numero'];
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
    <title>001 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <form method="post">
            <div class="row mb-3">
                <div class="col-sm-1">
                    <label class="col-sm-2 col-form-label">Número</label>
                    </div>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="numero">
                </div>
            </div>

            <div>
                <button class="btn btn-primary" name="enviar">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>