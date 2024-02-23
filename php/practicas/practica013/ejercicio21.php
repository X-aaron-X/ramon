<?php
    function operacionesArray(array $numeros, string $operacion): string {
        $resultado = "";

        switch ($operacion) {
            case "Sumar":
                $suma = array_sum($numeros);

                $resultado = "La Suma es: {$suma}";
                break;
            case "Producto":
                $producto = array_product($numeros);

                $resultado = "El Producto es: {$producto}";
                break;
            case "Restar":
                $resta = $numeros[0];
        
                for ($i = 1; $i < count($numeros); $i++) {
                    $resta = $resta - $numeros[$i];
                }

                $resultado = "La resta es: {$resta}";
                break;
        }

        return $resultado;
    }

    $numeros = [10, 5, 3];

    echo operacionesArray($numeros, "Producto");