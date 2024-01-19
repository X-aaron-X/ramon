<?php
    //Crear un formulario que me permita introducir un numero y quiero que me muestre todos los numeros introducidos
    //Se tiene que hace el ejercicio con sesiones
    session_start();
    $numeros = [];

    if(isset($_POST['enviar'])) {
        $numero = $_POST['numero'] ?: 0;

        $_SESSION['numeros'][] = $numero;
        $numeros = $_SESSION['numeros'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>003 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <form method="post">
            <div class="row mb-3">
                <div class="col-sm-1">
                    <label class="col-sm-2 col-form-label">Número</label>
                    </div>
                <div class="col-sm-11">
                    <input class="form-control" type="number" name="numero">
                </div>
            </div>

            <div class="col text-center">
                <button class="btn btn-primary btn-lg" name="enviar">Enviar</button>
            </div>
        </form><br>

        <?php
            if(isset($_POST['enviar'])) {
                ?>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-secondary text-center">Numeros Introducidos en la sesion</li>
                            <?php
                                foreach ($numeros as $numero) {
                                    echo "<li class=\"list-group-item list-group-item-action text-center\">{$numero}</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
</body>
</html>
