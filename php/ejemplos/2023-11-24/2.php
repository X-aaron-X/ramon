<?php
    function sumar($a, $b) {
        return $a + $b;
    }

    function restar($a, $b) {
        echo $a - $b;
    }

    $resultado = sumar(5, 8);

    echo "{$resultado} <br>";
    restar(8, 4);