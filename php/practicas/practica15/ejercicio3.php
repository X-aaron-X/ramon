<?php
    function solutions(string $a, array $x): string {
        $salida = "";

        $salida = in_array($a, $x) ? "True" : "False";

        return $salida;
    }

    echo solutions(3, [2,3,6,2,3]);