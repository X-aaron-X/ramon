<?php
    //Se trata de realizar un juego donde el usuario tiene que adivinar los 10 numeros del array
    //Creamos un formulario donde escribo un numero y cuando pulso enviar debe comprobar si el numero esta en el array
    //Si esta en el array me indica que he acertado y me muestra si fallo me cuenta un fallo y me debe mostrar el fallo
    //Cuando adivine los 10 numero la puntacion sera el numero de intentos para adivinar los 10 numeros
    //Una vez que adivinas los 10 numeros debe borrar las variables de sesion
    session_start();

    //numeros aletorios y ponerlo en un array
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $mensaje = "";

    if(isset($_POST['enviar'])) {
        $numero = $_POST['numero'] ?: 0;

        $_SESSION['aciertos'] = $_SESSION['aciertos'] ?? 0;
        $_SESSION['intentos'] = $_SESSION['intentos'] ?? 0;
        $_SESSION['numeroAcertados'] = $_SESSION['numeroAcertados'] ?? [];

        if (in_array($numero, $numeros) && !in_array($numero, $_SESSION['numeroAcertados'])) {
            $_SESSION['numeroAcertados'][] = $numero;
            $_SESSION['aciertos']++;
            $_SESSION['intentos']++;

            $mensaje = "Has acertado el número {$numero}";
        }
        else {
            $_SESSION['intentos']++;

            $mensaje = "No has acertado. El numero de fallos que tienes es " . ($_SESSION['intentos'] - $_SESSION['aciertos']); 
        }

        if ($_SESSION['aciertos'] == 10) {
            $mensaje = "Has acertado todos los números en $_SESSION[intentos] intentos. Los fallos que tienes son " . ($_SESSION['intentos'] - $_SESSION['aciertos']) .
                        ".<br> El juego se va a reiniciar";

            session_unset();
        }
    }

    if(isset($_POST['reiniciar'])) {
        session_unset();
        $mensaje = "Se ha reiniciado el juego";
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
    <title>004 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <form method="post">
            <div class="row mb-3">
                <div class="col-sm-1">
                    <label class="col-sm-2 col-form-label">Número</label>
                    </div>
                <div class="col-sm-11">
                    <input class="form-control" type="number" name="numero" required>
                </div>
            </div>

            <div class="col text-center">
                <button class="btn btn-primary btn-lg" name="enviar">Enviar</button>
                <button class="btn btn-warning btn-lg" name="reiniciar">Reiniciar</button>
            </div>
        </form><br>

        <div>
            <p class="fs-3"><?= $mensaje ?></p>
        </div>
    </div>
</body>
</html>
