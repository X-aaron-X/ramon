<?php
    // 1 paso
    // cuando le de al boton jugar me cree tres numeros aleatorios de 1 a 5
    // 2 paso
    // cuando le de al boton incrementar credito me sume 1 al credito
    // 3 paso
    // cuando le de el boton de jugar me permita jugar de la siguiente forma
    // si sale un 1 se gana 1 punto
    // si salen dos 1 se gana 4 puntos
    // si salen tres 1 se gana 10 puntos
    // si salen dos numeros iguales que no sean 1 se ganan 2 punto
    // si salen tres numeros iguales que no sean 1 se ganan 5 puntos
    session_start();

    function calcularPuntos(array $numeros): int {
        //$numeros = [1,2,2];

        //var_dump($numeros);
        $contador = array_count_values($numeros);
        $puntos = 0;

        if (isset($contador[1])) {
            $numero = $contador[1];
    
            $puntos += ($numero == 1) ? 1 : (($numero == 2) ? 4 : (($numero == 3) ? 10 : 0));
        }
        else {
            foreach ($contador as $cantidad) {
                $puntos += ($cantidad === 2) ? 2 : (($cantidad === 3) ? 5 : 0);
            }
        }

        return $puntos;
    }

    $num1 = "";
    $num2 = "";
    $num3 = "";

    $_SESSION['creditos'] = $_SESSION['creditos'] ?? 0;
    $_SESSION['ganancias'] = $_SESSION['ganancias'] ?? 0;
    $_SESSION['numeros'] = $_SESSION['numeros'] ?? [$num1, $num2, $num3];

    if(isset($_POST['jugar']) && $_SESSION['creditos'] > 0) {
        $num1 = rand(1, 5);
        $num2 = rand(1, 5);
        $num3 = rand(1, 5);
    
        $_SESSION['numeros'] = [$num1, $num2, $num3];
    
        $puntos = calcularPuntos($_SESSION['numeros']);
    
        $_SESSION['ganancias'] += $puntos;
        $_SESSION['creditos']--;
    }
    
    if(isset($_POST['meter'])) {
        $_SESSION['creditos']++;
    }

    if(isset($_POST['reiniciar'])) {
        session_unset();

        $_SESSION['creditos'] = $_SESSION['creditos'] ?? 0;
        $_SESSION['ganancias'] = $_SESSION['ganancias'] ?? 0;
        $_SESSION['numeros'] = $_SESSION['numeros'] ?? [$num1, $num2, $num3];
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
    <title>009 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <input style="width: 100%;height: 200px;font-size: 10em;text-align: center;" class="numeros" type="number" name="numero[]" value="<?= $num1 ?>" readonly>
                    </div>

                    <div class="col-sm-4">
                        <input style="width: 100%;height: 200px;font-size: 10em;text-align: center;" class="numeros" type="number" name="numero[]" value="<?= $num2 ?>" readonly>
                    </div>

                    <div class="col-sm-4">
                        <input style="width: 100%;height: 200px;font-size: 10em;text-align: center;" class="numeros" type="number" name="numero[]" value="<?= $num3 ?>" readonly>
                    </div>
                </div><br>
                
                <div class="row mb-3">
                    <div class="col text-center" style="font-size: 7em;background-color: #6200ff0f;">
                        <label for="creditos" class="form-label">Credito</label>
                    </div>

                    <div class="col-sm-7">
                        <input style="width: 100%;height: 200px;font-size: 10em;text-align: center;" type="number" name="creditos" id="creditos" value="<?= $_SESSION['creditos']?>" readonly>
                    </div>
                </div><br>
                
                <div class="row mb-3">
                    <div class="col-sm-5 text-center" style="font-size: 7em;background-color: #6200ff0f;">
                        <label for="ganancia">Ganancias</label>
                    </div>

                    <div class="col-sm-7">
                        <input style="width: 100%;height: 200px;font-size: 10em;text-align: center;" type="number" name="ganancias" value="<?= $_SESSION['ganancias'] ?>" readonly>
                    </div>
                </div><br>
                
                <div class="col text-center">
                    <button class="btn btn-outline-primary btn-lg" name="jugar">jugar</button>
                    <button class="btn btn-outline-warning btn-lg" name="meter">Incrementar creditos</button>
                    <button class="btn btn-outline-danger btn-lg" name="reiniciar">Reiniciar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>