<?php
    require_once 'funciones.php';
    require_once 'controlErrores.php';

    // Mostrar todos los datos de la tabla persona de la base de datos persona1
    // Del servidor de base de datos que esta en localhost

    // Quiero que utilicemos el metodo fech_all utilizamos un array asociativo para cada registro
    $conexion = new mysqli('localhost','root','','personas1','3307');

    // Verificar la conexion
    if ($conexion->connect_error) {
        die("La conexion ha fallado: " . $conexion->connect_error);
    }

    // Consulta
    $resultados = $conexion->query("SELECT * FROM  personas");

    // Imprimir por pantalla
    $registros = $resultados->fetch_all(MYSQLI_ASSOC);
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

            echo "<div class=\"row\">";
                echo listView($registros);
            echo "</div>";
        ?>
    </div>
</body>
</html>
<?php
    $conexion->close();
?>