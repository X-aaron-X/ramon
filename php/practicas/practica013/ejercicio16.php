<?php
    $resultado = "";

    function numero (int $num1, int $num2) {
        global $resultado;

        $resultado = $num1 + $num2;
    }

    $num1 = 1;
    $num2 = 2;

    numero($num1, $num2);

    echo $resultado;
