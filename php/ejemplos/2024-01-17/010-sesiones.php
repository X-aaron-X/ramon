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
        $_SESSION['creditos']--;
        $num1 = rand(1, 5);
        $num2 = rand(1, 5);
        $num3 = rand(1, 5);

        $_SESSION['numeros'] = [$num1, $num2, $num3];

        $puntos = calcularPuntos($_SESSION['numeros']);

        $_SESSION['ganancias'] += $puntos;
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
    <link rel="stylesheet" href="tragaperras.css">
    <title>009 - sesiones</title>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST">
                <div class="row mb-3 caja-frutas">
                    <div class="col-sm-4">
                        <div class="border border-secondary" style="height: 350px;background: white;border-radius: 20px;">
                            <span><img style="height: 350px;"src="imgs/<?= $num1 ?>.svg" class="img-fluid" alt=""></span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="border border-secondary" style="height: 350px;background: white;border-radius: 20px;">
                            <span><img style="height: 350px;" src="imgs/<?= $num2 ?>.svg" class="img-fluid" alt=""></span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="border border-secondary" style="height: 350px;background: white;border-radius: 20px;">
                            <span><img style="height: 350px;" src="imgs/<?= $num3 ?>.svg" class="img-fluid" alt=""></span>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col text-center" style="font-size: 5em;background-color: #6200ff0f;border-radius: 20px;">
                        <label for="creditos" class="form-label">Creditos</label>
                    </div>

                    <div class="col-sm-7">
                        <input style="width: 100%;height: 150px;font-size: 8em;text-align: center;border-radius: 20px;" type="number" name="creditos" id="creditos" value="<?= $_SESSION['creditos']?>" readonly>
                    </div>
                </div><br>
                
                <div class="row mb-3">
                    <div class="col-sm-5 text-center" style="font-size: 5em;background-color: #6200ff0f;border-radius: 20px;">
                        <label for="ganancia">Ganancias</label>
                    </div>

                    <div class="col-sm-7">
                        <input style="width: 100%;height: 150px;font-size: 8em;text-align: center;border-radius: 20px;" type="number" name="ganancias" value="<?= $_SESSION['ganancias'] ?>" readonly>
                    </div>
                </div>
                
                <div class="row text-center">
                    <div class="col-sm-4">
                        <button class="btn btn-primary" style="width: 100%;height: 200px;font-size: 4em;" name="jugar">Jugar</button>
                    </div>

                    <div class="col-sm-4">
                        <button class="btn btn-warning" style="width: 100%;height: 200px;font-size: 4em;" name="meter">Moneda</button>
                    </div>

                    <div class="col-sm-4">
                        <button class="btn btn-danger" style="width: 100%;height: 200px;font-size: 4em;" name="reiniciar">Reiniciar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>