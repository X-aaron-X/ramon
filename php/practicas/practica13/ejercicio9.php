<?php
    function arrayNumeros(array $arrayNum): string {
        $salida = "";

        foreach ($arrayNum as $num) {
            if ($num < 0) {
                $salida = "Hay negativos";
                return $salida;
            }
        }

        $salida = "No hay negativos";
        return $salida;
    }

    $arrayNum = [1,2,3,4,-5];

    echo arrayNumeros($arrayNum);
