<?php
    function narcissistic(int $value): bool {
        $salida = false;
        $longitud = strlen($value);
        $numArray = str_split($value);
        $suma = 0;

        foreach($numArray as $num){
            $suma += pow($num, $longitud);
        }

        return $salida;
    }

    echo narcissistic(456);