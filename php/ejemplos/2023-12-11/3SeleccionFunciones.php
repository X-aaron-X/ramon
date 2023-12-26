<?php
    /**
     * Calcula el descuento de un número de unidades pedido
     * Si el numero de unidades pedidaas esta entre
     * 0-10: descuento 0
     * 11-20: descuento 10
     * 21-30: descuento 20
     * mayor a igual que 31 : descuento 30
     * @param int $numero
     * @return int descuento calculado
     */
    function calcularDescuento (int $numero): int {
        $descuento = 0;

        if ($numero >= 0 && $numero <= 10) {
            $descuento = 0;
        }
        else if($numero <= 20) {
            $descuento = 10;
        }
        else if($numero <= 30) {
            $descuento = 20;
        }
        else {
            $descuento = 30;
        }

        return $descuento;
    }

    /**
     * Calcula el color 
     * Rojo => r
     * Amariilo => a
     * Verde => v
     * @param int $numero
     * @return string color calculado
     */
    function calcularColor(string $color): string {
        $salida = "";

        if ($color == "r") {
            $salida = "El color es rojo";
        }
        else if($color == "a") {
            $salida = "El color es amarillo";
        }
        else if($color == "v") {
            $salida = "El color es verde";
        }
        else {
            $salida = "El color no existe";
        }

        return $salida;
    }


    $numero = 20;
    $resultadoDescuento = calcularDescuento($numero);

    echo "El descuento es del {$resultadoDescuento}%";

    echo "<br><hr><br>";

    $color = "a";
    $resultadoColor = calcularColor($color);

    echo "El color es {$resultadoColor}";
