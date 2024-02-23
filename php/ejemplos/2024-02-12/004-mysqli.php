<?php
    require_once 'funciones.php';
    require_once 'controlErrores.php';

    $conexion = new mysqli('localhost','root','','personas1','3307');

    if ($conexion->connect_error) {
        die("La conexion ha fallado: " . $conexion->connect_error);
    }

    $consulta = "SELECT * FROM personas";
    $resultados = $conexion->query($consulta);

    // Obtenemos el objeto de tipo stdClass donde tenemos los datos del registro
    while ($registro = $resultados->fetch_object()) {
        $registros[] = $registro;
    }    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>001 - Mysqli</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <?php
            echo gridViewTable($registros);
        ?>
    </div>
</body>
</html>
<?php
    $conexion->close();
?>