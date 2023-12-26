<?php
    function comprobarNum(int $num, int $num2): string {
        $resultado = "";

        if ($num == $num2) {
            $resultado = "El numero {$num} es igual que {$num2}";
        }
        else {
            $resultado = "El numero {$num} es distinto que {$num2}";
        }

        return $resultado;
    }

    $num1 = 10;
    $num2 = 10;
    
    echo comprobarNum($num1, $num2);