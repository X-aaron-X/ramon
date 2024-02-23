<?php
    session_start();

    require_once 'funciones.php';
    require_once 'controlErrores.php';
    
    $parametros = require_once 'parametros.php';

    $salida = "";
    $accion = "Actualizar";

    $elementoMenu = [
        'Inicio' => 'index.php',
        'Insertar' => 'insertar.php',
    ];

    $botones = [
        'Editar' => 'actualizar.php',
        'Eliminar' => 'eliminar.php'
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

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM libros WHERE id={$id}";

        $resultados = $conexion->query($sql);
        $datos = $resultados->fetch_assoc();
    }
    else {
        header("Location: index.php");
    }

    if ($_POST) {
        $datos = [
            'id' => $id,
            'titulo' => $_POST['titulo'],
            'paginas' => $_POST['paginas'],
            'fechaPublicacion' => $_POST['fechaPublicacion']
        ];

        $sql = "UPDATE libros SET 
                    titulo='{$datos['titulo']}',
                    paginas='{$datos['paginas']}',
                    fechaPublicacion='{$datos['fechaPublicacion']}' 
                WHERE id={$id}";

        if ($conexion->query($sql)) {
            $salida = "Se ha actualizado el registro correctamente";

            $sql = "select * from libros where id={$id}";
            $resultado = $conexion->query($sql);
            
            $salida .= gridViewTableBotones($resultado, $botones);

            $salida .= "<p class='text-center'>
                            <a href='index.php' class='btn btn-warning'>Ver Registros</a>
                        </p>";
        }
        else {
            $salida = "Error al actualizar el registro: {$conexion->error}";
        }
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
    <title>Actualizar Registro <?= $parametros['nombreAlicacion'] ?></title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <?php
            echo menu($parametros['nombreAlicacion'], $elementoMenu);
        ?>

        <div class="p-3">
            <h1 class="text-center display-5"> <?= $accion ?> Registros </h1>

            <div class="p-5">
                <?php
                    if(!$_POST) {
                        require '_form.php';
                    }

                    echo $salida;
                ?>
            </div>
        </div>
    </div>
</body>
</html>