<?php
    session_start();

    require_once 'controlErrores.php';
    require_once 'funciones.php';

    $parametros = require_once 'parametros.php';
    $salida = "";

    $elementoMenu = [
        'Inicio' => 'index.php',
        'Mensajes' => 'mensajes.php',
        'Salir' => 'salir.php'
    ];

    if ($_POST) {
        $usuario = $_POST['usuario'] ?? '';

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
        
        $sql = "SELECT * FROM mensajes WHERE nombre = '{$usuario}'";

        if ($conexion->query($sql)->num_rows > 0) {
            $_SESSION['usuario'] = $usuario;

            $salida = "<div class='alert alert-success text-center mt-5' role='alert'>
                            <h4 class='alert-heading'>¡Bienvenido {$usuario}!</h4>
                        </div>";
        }
        else {
            $salida = "Error al insertar el registro";
        }
    
        $conexion->close();
    }
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
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <div>
            <?php
                if (isset($_SESSION['usuario'])) {
                    echo menu($parametros['nombreAlicacion'], $elementoMenu);
                }
            ?>
        </div>
        
        <div class="col-md-6 offset-md-3">
            <?php 
                if (!isset($_SESSION['usuario'])) { 
                    require '_login.php';
                }
            ?>

            <div class="text-center mb-5 text-dark">
                <?php
                    if (!isset($_SESSION['usuario'])) {
                        $salida;
                    }
                    else {
                        echo "<div class='alert alert-success text-center mt-5' role='alert'>
                                <h4 class='alert-heading'>¡Bienvenido {$_SESSION['usuario']}!</h4>
                            </div>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>