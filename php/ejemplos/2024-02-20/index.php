<?php
    use clases\Bd;
    use clases\Biblioteca;

    require_once 'autoload.php';
    require_once 'controlErrores.php';

    $conexion = Bd::conectarDb('Biblioteca');

    $datos = [
        "titulo" => "",
        "paginas" => "",
        "fechaPublicacion" => "",
    ];

    if ($conexion->connect_error) {
        die("La conexión ha fallado: {$conexion->connect_error}");
    }

    $sql = "SELECT * FROM libros";

    if ($resultados = $conexion->query($sql)) {
        $biblioteca = new Biblioteca();

        $salida = $biblioteca->gridViewTableBotones($resultados);
    }
    else {
        $salida = "Error al mostrar al registro: {$conexion->error}";
    }

    $registros = [
        'titulo' => 'sdfs',
        'paginas' => '2342',
        'fechaPublicacion' =>  '2024-02-16'
    ];

    Bd::insertarRegistros('biblioteca', 'libros', $registros);

    var_dump($registros);

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
    <title>Biblioteca</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h1 class="text-center display-4"> Bibioteca</h1>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#.php">INSERTAR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="p-5">
            <?= $salida ?>
        </div>
    </div>
</body>
</html>
