<?php
    session_start();

    if (!isset($_SESSION['datosUsuario'])) {
        header('Location: 007-sesiones.php');
    }

    if(isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'] ?: '';
        $apellidos = $_POST['apellidos'] ?: '';
        
        $_SESSION['datosUsuario'] = [
            'nombre' => $nombre,
            'apellidos' => $apellidos
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
    <title>008 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="row justify-content-center">
                    <h1 class="display-4 text-center">Tus Datos Personales</h1>
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

        <div class="col text-center">
            <a href="007-sesiones.php" class="btn btn-secondary btn-lg">Volver</a>
        </div>
    </div>
</body>
</html>