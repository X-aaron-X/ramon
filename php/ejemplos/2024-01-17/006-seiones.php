<?php
    session_start();
    $ganar = "";

    function crearNumerosAleatorios(int $minimo, int $maximo): array {
        $numeros = range($minimo, $maximo);
        $tamanoArray = rand(1, 20);

        shuffle($numeros);
        
        return array_slice($numeros, 0, $tamanoArray);
    }

    $_SESSION["numeros"] = $_SESSION["numeros"] ?? crearNumerosAleatorios(1, 50);
    $_SESSION["dibujoArray"] = $_SESSION["dibujoArray"] ?? array_fill(0, count($_SESSION["numeros"]), '-');
    
    if(isset($_POST['enviar'])) {
        $numero = $_POST['numero'] ?: 0;

        $_SESSION['aciertos'] = $_SESSION['aciertos'] ?? 0;
        $_SESSION['intentos'] = $_SESSION['intentos'] ?? 0;
        $_SESSION['numeroAcertados'] = $_SESSION['numeroAcertados'] ?? [];

        if (in_array($numero, $_SESSION["numeros"]) && !in_array($numero, $_SESSION['numeroAcertados'])) {
            $_SESSION['numeroAcertados'][] = $numero;
            $_SESSION["dibujoArray"][array_search($numero, $_SESSION["numeros"])] = $numero;

            $_SESSION['aciertos']++;
            $_SESSION['intentos']++;
        }
        else {
            $_SESSION['intentos']++;
        }

        if ($_SESSION['aciertos'] == count($_SESSION["numeros"])) {
            //session_unset();

            $_SESSION["numeros"] = $_SESSION["numeros"] ?? crearNumerosAleatorios(1, 50);
            $_SESSION["dibujoArray"] = $_SESSION["dibujoArray"] ?? array_fill(0, count($_SESSION["numeros"]), '-');

            $ganar = '<img src="ganador.png">';
        }
    }

    if(isset($_POST['reiniciar'])) {
        session_unset();

        $_SESSION["numeros"] = $_SESSION["numeros"] ?? crearNumerosAleatorios(1, 50);
        $_SESSION["dibujoArray"] = $_SESSION["dibujoArray"] ?? array_fill(0, count($_SESSION["numeros"]), '-');
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
    <title>006 - sesiones</title>
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
                <button class="btn btn-warning btn-lg" name="reiniciar">Reiniciar</button>
            </div>
        </form><br>

        <div>
            <?php
                if(isset($_SESSION['dibujoArray'])) {
                    echo '<table class="table table-bordered"><tr>';

                    foreach($_SESSION['dibujoArray'] as $dibujo) {
                        echo $dibujo == "-" ? "<td class='text-center'>{$dibujo}</td>" : "<td class='text-center' style='color:white;background-color:#0ad10a;width: auto;'>$dibujo</td>";
                    }

                    echo '</tr></table>';
                }
            ?>
            <?php
                echo '<table class="table table-bordered"><tr>';

                foreach($_SESSION['numeros'] as $num) {
                    echo "<td class='text-center'>$num</td>";
                }

                echo '</tr></table>';
            ?>    
            <?php
                if(isset($_POST['enviar']) && isset($_SESSION['intentos'])) {
            ?>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color: #33ccff;color:white">Intentos</li>
                            <li class="list-group-item list-group-item-action"><?= $_SESSION['intentos'] ?></li>
                        </ul>
                    </div>
                    
                    <div class="col-6">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color: #e57373;color:white">Errores</li>
                            <li class="list-group-item list-group-item-action"><?= $_SESSION['intentos'] - $_SESSION['aciertos'] ?></li>
                        </ul>
                    </div>
                </div><br><br>
                <div class='text-center'><?= $ganar ?></div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>