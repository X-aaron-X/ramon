<?php
    require_once 'funciones.php';
    require_once 'controlErrores.php';
    
    $parametros = require_once 'parametros.php';

    $elementoMenu = [
        'Inicio' => 'index.php',
        'Mensajes ' => 'mensajes.php',
        'Salir ' => 'index.php'
    ];

    if (!isset($_GET['id'])) {
        header("Location: index.php");
        exit;
    }

    $id = $_GET['id'];

    $conexion = @new mysqli(
        $parametros['servidor'], 
        $parametros['usuario'], 
        $parametros['password'], 
        $parametros['nombreBd'], 
        $parametros['port']
    );

    if ($conexion->connect_error) {
        die("La conexion ha fallado: {$conexion->connect_error}");
    }

    $sql = "DELETE FROM mensajes WHERE id={$id}";

    if ($conexion->query($sql)) {
        $salida = "<div class='p-2'>
                        <div class='alert alert-success'>
                            Se ha eliminado el registro correctamente
                        </div>
                    </div>";

        $salida .= "<p class='text-center'>
                        <a href='mensajes.php' class='btn btn-warning'>Volver</a>
                    </p>";
    }
    else {
        $salida = $salida = "<div class='p-2'>
                                <div class='alert alert-danger'>
                                    Error al eliminar el registro
                                </div>
                            </div>";
    }
    
    $conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Borrar Registro <?= $parametros['nombreAlicacion'] ?></title>
</head>
<body>
    <?= menu($parametros['nombreAlicacion'], $elementoMenu) ?>

    <div class="container">
        <div class="p-3">
            <div class="p-5">
                <?= $salida ?>
            </div>
        </div>
    </div>
</body>
</html>