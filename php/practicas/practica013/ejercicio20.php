<?php
    function operaciones(int $num1, int $num2, string $operacion): string {
        $resultado = "";

        switch ($operacion) {
            case "Sumar":
                $suma = $num1 + $num2;

                $resultado = "La Suma es: {$suma}";
                break;
            case "Producto":
                $producto = $num1 * $num2;

                $resultado = "El Producto es: {$producto}";
                break;
            case "Restar":
                $resta = $num1 - $num2;

                $resultado = "La resta es: {$resta}";
                break;
        }

        return $resultado;
    }

    $num1 = 10;
    $num2 = 5;

    echo operaciones($num1, $num2, "Sumar");