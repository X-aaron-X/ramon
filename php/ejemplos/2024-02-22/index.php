<?php
    session_start();

    require_once 'controlErrores.php';
    require_once 'funciones.php';

    $parametros = require_once 'parametros.php';
    $salida = "";
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';

    $elementoMenu = [
        'Inicio' => 'index.php',
        'Mensajes' => 'mensajes.php',
        'Salir' => 'salir.php'
    ];

    if ($_POST) {
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
            $salida = "<div class='alert alert-danger text-center mt-5' role='alert'>
                            <h4 class='alert-heading'>Error con el usuario {$usuario}</h4>
                        </div>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Mensajes</title>
</head>
<body>
    <?php
        if (isset($_SESSION['usuario'])) {
            echo menu($parametros['nombreAlicacion'], $elementoMenu);
        }
    ?>

    <div class="container">    
        <div class="col-md-6 offset-md-3">
            <?php 
                if (!isset($_SESSION['usuario'])) { 
                    require '_login.php';
                }
            ?>

            <div class="text-center mb-5 text-dark">
                <?php
                    if (!isset($_SESSION['usuario'])) {
                        echo $salida;
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>