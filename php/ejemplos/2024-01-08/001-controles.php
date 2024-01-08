<?php
    /**
     * Funcion que calcula una operacion que es buscar 
     * el primer numero en el tercer argumento y el segundo numero en el tercer argumento
     * y devolver las veces que se repiten y su suma
     * @param array $datos Array cuyo primer y segundo elemento son dos numeros y el tercer elemento un string en formato csv
     * @return array $resultado array en cuya primera posicion esta las veces que se repite el primero numero
     * y en la segunda posicion las veces que se repite el segundo numero 
     * y en la tercera posicion la suma de ambos
     */
    function operacion(...$datos) {
        $numero1 = $datos[0];
        $numero2 = $datos[1];
        $operacion = explode(",", $datos[2]);
        
        //buscar en el array operacion cuantas veces se repite el numero1
        $resultado = [
            array_count_values($operacion)[$numero1] ?? 0,
            array_count_values($operacion)[$numero2] ?? 0,
            $numero1 + $numero2,
        ];

        //Otra forma
        // $resultado = [
        //     substr_count($datos[2], $numero1) ?? 0,
        //     substr_count($datos[2], $numero2) ?? 0,
        //     $numero1 + $numero2,
        // ];
        
        return $resultado;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controles</title>
</head>
<body>
    <form method="post" action="001-controles.php">
        <div>
            <label for="numero1">Numero 1</label>
            <input type="number" name="numero1" id="numero1" required> <!-- 1 -->
        </div><br>
        <div>
            <label for="numero2">Numero 2</label>
            <input type="number" name="numero2" id="numero2" required> <!-- 3 -->
        </div><br>
        <div>
            <label for="operacion">Operacion</label>
            <input type="text" name="operacion" id="operacion" required> <!-- 1,2,1,2,3,2,1,2,3,4 -->
        </div><br>
        <div>
            <button name="enviar" value="enviar">Enviar</button>
            <button type="reset">Limpiar</button>
        </div>
    </form>
    <?php
        $resultado = [];

        if(isset($_POST["enviar"])) {
            $numero1 = $_POST["numero1"] ?: 0;
            $numero2 = $_POST["numero2"] ?: 0;
            $operacion = $_POST["operacion"] ?: "";

            $resultado = operacion($numero1, $numero2, $operacion);
        }
    
        if ($resultado) {
    ?>
    <h1>Resultados</h1>
    <p>El primer numero <?= $numero1 ?> se repite <?= $resultado[0] ?> veces</p>
    <p>El segundo numero <?= $numero2 ?> se repite <?= $resultado[1] ?> veces</p>
    <p>La suma de ambos es <?= $resultado[2] ?></p>

    <?php
        }
    ?>
</body>
</html>