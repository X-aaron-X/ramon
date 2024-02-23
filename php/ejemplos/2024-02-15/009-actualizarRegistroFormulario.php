<?php
    // Arranco la sesion para almezar el id del usuario
    session_start();

    $parametros = require_once 'parametros.php';
    require_once 'funciones.php';

    controlErrores();

    $salida = "";
    $accion = "Actualizar";

    // Conexion a la base de datos
    $conexion = @new mysqli(
        $parametros['servidor'], 
        $parametros['usuario'], 
        $parametros['password'], 
        $parametros['nombreBd'], 
        $parametros['port']
    );

    // Control de errores
    if ($conexion->connect_error) {
        die("La conexion ha fallado: {$conexion->connect_error}");
    }

    // Cpmprueba si he pulsado el boton de actualizar y tego que actualizar los datos del empleado
    if ($_POST) {
        $id = $_SESSION["id"];

        $datos = [
            'id' => $id,
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'edad' => $_POST['edad'],
            'poblacion' => $_POST['poblacion'],
            'codigoPostal' => $_POST['codigoPostal'],
            'fechaNacimiento' => $_POST['fechaNacimiento']
        ];

        $sql = "UPDATE empleados SET 
                    nombre='{$datos['nombre']}',
                    apellidos='{$datos['apellidos']}',
                    edad={$datos['edad']},
                    poblacion='{$datos['poblacion']}',
                    codigoPostal={$datos['codigoPostal']},
                    fechaNacimiento='{$datos['fechaNacimiento']}' 
                WHERE id={$id}";

        if ($conexion->query($sql)) {
            $salida = "Se ha actualizado el registro correctamente";
            $salida .= "<p class='text-center'>
                            <a href='008-listarRegistrosUpdeteDelete.php' class='btn btn-warning'>Ver Registros</a>
                        </p>";
        }
        else {
            $salida = "Error al actualizar el registro: {$conexion->error}";
        }
    }

    // Si vengo del listado y quiero mostrar el formulario con los datos del empleado a actualizar
    if (isset($_GET['id'])) {
        $_SESSION["id"] = $_GET["id"];
        $id = $_SESSION["id"];

        $sql = "select * from empleados where id={$id}";

        $resultados = $conexion->query($sql);
        $datos = $resultados->fetch_assoc();
    }
    else {
        header("Location: 008-listarRegistrosUpdeteDelete.php");
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
        <h1 class="text-center display-2"> <?= $parametros['nombreAlicacion'] ?></h1>
        <h1 class="text-center display-5"> <?= $accion ?> Registros </h1>

        <div class="p-5">
            <?php
                require '_form.php';

                echo $salida;
            ?>
        </div>
    </div>
</body>
</html>