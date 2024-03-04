<?php
    session_start();

    require_once 'controlErrores.php';
    require_once 'funciones.php';

    $parametros = require_once 'parametros.php';
    $accion = "Enviar";
    $salida = "";

    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php");
        exit();
    }

    $elementoMenu = [
        'Inicio' => 'index.php',
        'Mensajes' => 'mensajes.php',
        'Salir' => 'salir.php'
    ];

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

    if($_POST) {
        //date_default_timezone_set('Europe/Madrid');

        $datos = [
            "nombre" => $_SESSION['usuario'],
            "mensaje" => $_POST['mensaje'],
            "fechaHora" => date('Y-m-d H:i:s')
        ];

        $sql = "INSERT INTO mensajes (nombre, mensaje, fechaHora) VALUES (
                    '{$datos['nombre']}',
                    '{$datos['mensaje']}',
                    '{$datos['fechaHora']}'
                )";

        if ($conexion->query($sql)) {
            $salida = "<div class='p-4'>
                            <div class='alert alert-success'>
                                Mensaje enviado correctamente
                            </div>
                        </div>";
        }
        else {
            $salida = "<div class='p-4'>
                            <div class='alert alert-danger'>
                                Error al crear el registro
                            </div>
                        </div>";
        }
    }
    
    $sql = "SELECT * FROM mensajes";

    if ($resultado = $conexion->query($sql)) {
        $botones = [
            'Eliminar' => 'eliminar.php'
        ];

        $salida .= gridViewTableBotones($resultado, $botones);
    }
    else {
        $salida = "No hay datos";
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
    <title>Mensajes</title>
</head>
<body>
    <?= menu($parametros['nombreAlicacion'], $elementoMenu) ?>

    <div class="container">
        <div class="p-5">
            <?php
                require '_form.php';
            ?>
        
            <div class="text-center text-dark my-4">
                <?= $salida ?>
            </div>
        </div>
    </div>
</body>
</html>