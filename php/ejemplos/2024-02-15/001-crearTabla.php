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

    // Crear la tabla personas si no existe
    $sql = "CREATE TABLE IF NOT EXISTS empleados (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(30) NOT NULL,
                apellidos VARCHAR(30) NOT NULL,
                edad INT(3) NOT NULL,
                poblacion VARCHAR(30) NOT NULL,
                codigoPostal VARCHAR(5) NOT NULL,
                fechaNacimiento DATE NOT NULL
            )";
    
    if ($conexion->query($sql)) {
        $salida = "La tabla se ha creado correctamente";
    }
    else {
        $salida = "Error creando la tabla: {$conexion->error}";
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
    <title>Crear Tabla <?= $parametros['nombreAlicacion'] ?></title>
</head>
<body>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <h1> <?= $parametros['nombreAlicacion'] ?></h1>
        <?= $salida ?>
    </div>
</body>
</html>
<?php
    $conexion->close();
