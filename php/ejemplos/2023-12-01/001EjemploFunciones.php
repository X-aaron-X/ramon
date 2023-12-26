<?php
    // tipifica los argumentos como numeros enteros
    // tipifica el valor devuelto como numero entero
    function suma(int $numero1, int $numero2): int {
        return $numero1 + $numero2;
    }


    function resta(float $numero1, float $numero2): float {
        return $numero1 - $numero2;
    }

    /*
    funcion que recibe dos numeros y calcula
    suma
    resta
    producto
    cociente
    los valores los debe devolver como un array asociativo donde los indices deben ser los nombres de las operaciones
    */

    function operaciones(int $numero1, int $numero2): array {
        $resultados = [
            "suma" => $numero1 + $numero2,
            "resta" => $numero1 - $numero2,
            "producto" => $numero1 * $numero2,
            "cociente" => $numero1 / $numero2,
        ];

        return $resultados;
    }


    /**
     * probar las funciones
     */

    $a = mt_rand(1, 100);
    $b = mt_rand(1, 100);
?>

<ul>
    <li>Numero 1: <?= $a ?></li>
    <li>Numero 2: <?= $b ?></li>
</ul>

<?php
    // calcular la suma con la funcion suma
    $suma = suma($a, $b);
    // mostrar la suma en un div
?>

<div> <?= $suma ?></div>

<?php
    // calcular la resta con la funcion resta
    $resta = resta($a, $b);
    // mostrar la resta en un div
?>

<div> <?= $resta ?></div>

<?php
    // calcular suma,resta,producto y cociente
    // con la funcion operaciones
    $operaciones = operaciones($a, $b);
    // mostrar los resultados en el siguiente listado
?>

<ul>
    <li>Suma:  <?= $operaciones["suma"] ?> </li>
    <li>Resta: <?= $operaciones["resta"] ?> </li>
    <li>Producto: <?= $operaciones["producto"] ?> </li>
    <li>Cociente: <?= $operaciones["cociente"] ?> </li>
</ul>