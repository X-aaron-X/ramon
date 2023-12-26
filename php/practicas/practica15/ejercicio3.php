<?php
    function solutions(string $a, array $x): string {
        $salida = ""; 

        if (in_array($a, $x) === true) {
            $salida = "true";
        }
        else {
            $salida = "false";
        }

        return $salida;
    }

    echo solutions(3, [2,3,6,2,3]);