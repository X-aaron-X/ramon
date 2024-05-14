<?php
    $num = 0;
    $arrayNumeros = [];

    if (isset($_POST['enviar'])) {
        $num = $_POST['numero'];

        function dibujarImput(int $num): string {
            $salida = "<form method='post'>";
        
            for ($i = 1; $i <= $num; $i++) {
                $salida .= "
                    <div class='row mb-3'>
                        <div class='col-1'>
                            <label for='{$i}'>{$i}</label>
                        </div>
        
                        <div class='col-10'>
                            <input type='text' name='numeros[{$i}]' id='{$i}' class='form-control'>
                        </div>
                    </div>";
            }
            
            $salida .=  "<div class='text-center'>
                                <button class='btn btn-primary' name='comprobar'>Comprobar</button>
                                <button type='reset' class='btn btn-secondary'>Restablecer</button>
                            </div>";
            $salida .=  "</form>";
        
            return $salida;
        }
    }

    if (isset($_POST['comprobar'])) {
        $arrayNumeros = $_POST['numeros'];

        function comprobarPalabra(array $arrayNumeros) {
            $salida = "";
            $repetidos = 0;
            $contador = 0;
            $num = 0;
        
            foreach ($arrayNumeros as $value) {
                if ($value != '') {
                    if (in_array($value, $arrayNumeros)) {
                        $repetidos++;
                    }

                    $contador++;
                }

                $num++;
            }

            if ($repetidos > 0) {
                $salida = "<p>Hay elementos repetidos</p>";
            }
            else {
                $salida = "<p>No hay elementos repetidos</p>";
            }
            
            $salida .= "<p>Has rellenado {$contador} cajas de un total de {$num}</p>";

            return $salida;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Ejercicio 1</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">EJERCICIO NUMERO 1 DEL EXAMEN DE PHP</h1>
        <p>Escriba una palabra en cada caja de texto y le dire si ha repetido alguna</p>

        <div class="border border-secondary my-5 p-5">
            <?php 
                if (!isset($_POST['comprobar'])) {
                    echo dibujarImput($num);
                }
                else {
                    echo comprobarPalabra($arrayNumeros);
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
