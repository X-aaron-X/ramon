<?php
    $parametros = require_once 'parametros.php';
    require_once 'funciones.php';

    controlErrores();

    $salida = "";
    $accion = "Insertar";

    // inicializo el array de datos que es lo que muestra por defecto en el formulario
    $datos = [
        "id" => "",
        "nombre" => "",
        "apellidos" => "",
        "edad" => "",
        "poblacion" => "Santander",
        "codigoPostal" => "39009",
        "fechaNacimiento" => ""
    ];

    if($_POST) {
        $datos = [
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'edad' => $_POST['edad'],
            'poblacion' => $_POST['poblacion'],
            'codigoPostal' => $_POST['codigoPostal'],
            'fechaNacimiento' => $_POST['fechaNacimiento']
        ];

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

        $sql = "INSERT INTO empleados (nombre, apellidos, edad, poblacion, codigoPostal, fechaNacimiento) VALUES (
                    '{$datos['nombre']}', 
                    '{$datos['apellidos']}', 
                    '{$datos['edad']}', 
                    '{$datos['poblacion']}', 
                    '{$datos['codigoPostal']}', 
                    '{$datos['fechaNacimiento']}
                ');";

        if ($conexion->query($sql)) {
            $salida = "Registro creado correctamente";
            $salida .= "<p class='text-center'>
                            <a href='003-listarRegistros.php' class='btn btn-warning'>Ver Registros</a>
                        </p>";
        }
        else {
            $salida = "Error al crear el registro: {$conexion->error}";
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
    <title>Listar Registros <?= $parametros['nombreAlicacion'] ?></title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <h1 class="text-center display-3"> <?= $parametros['nombreAlicacion'] ?></h1>
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