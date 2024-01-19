<?php
    // Realizar un formulario que envie los datos a otra pagina
    // los datos son nombre y apellidos
    // la otra pagina debe almacenar los datos en una variable de sesion llamada
    // datos y mostrarlos por pantalla con un enlace para volver al formulario
    // en caso de que se cargue la otra pagina directamente si no hay datos metidos anteriormente
    // debe volver a cargar el formulario

    // ademas del formulario nos debe mostrar los ultimos datos enviados
    // en caso de que no haya ningun dato metido anteriormente que me muestre los campos vacios
    // aprovechando la variable de sesion
    session_start();

    if (!isset($_SESSION['datosUsuario'])) {
        $_SESSION['datosUsuario'] = [
            'nombre' => '',
            'apellidos' => ''
        ];
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
    <title>007 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <form method="post" action="008-sesiones.php">
            <div class="row mb-3">
                <div class="col-sm-1">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                </div>

                <div class="col-sm-11">
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-1">
                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                </div>

                <div class="col-sm-11">
                    <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                </div>
            </div>

            <div class="col text-center">
                <button class="btn btn-primary btn-lg" name="enviar">Enviar</button>
            </div>
        </form><br>
        
        <?php
            if ($_SESSION['datosUsuario']['nombre'] != '' && $_SESSION['datosUsuario']['apellidos'] != '') {
        ?>
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="row justify-content-center">
                    <h1 class="display-5 text-center">Ultimos datos personales</h1>
                    <table class="table table-striped mb-0 table-hover">
                        <thead >
                            <tr>
                                <th scope="col" style="background-color: #002d72;color: white;">Nombre</th>
                                <th scope="col" style="background-color: #002d72;color: white;">Apellidos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $_SESSION['datosUsuario']['nombre'] ?></td>
                                <td><?= $_SESSION['datosUsuario']['apellidos'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</body>
</html>