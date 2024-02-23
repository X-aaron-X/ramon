<?php
    $parametros = require_once 'parametros.php';
    require_once 'funciones.php';

    controlErrores();

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

    $sql = "UPDATE empleados SET nombre='Juan Carlos 2' WHERE id=1";

    if ($conexion->query($sql)) {
        $salida = "Se ha actualizado el registro correctamente";
    }
    else {
        $salida = "Error al actualizar el registro: {$conexion->error}";
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
    <title>Actualizar Registro <?= $parametros['nombreAlicacion'] ?></title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <h1 class="text-center display-3"> <?= $parametros['nombreAlicacion'] ?></h1>

        <div class="p-5">
            <?= $salida ?>
        </div>
    </div>
</body>
</html>
<?php
    $conexion->close();

