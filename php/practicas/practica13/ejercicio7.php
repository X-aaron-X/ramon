<?php
    function comprobarNum(int $num, int $num2) {
        if ($num == $num2) {
            echo "El numero {$num} es igual que {$num2}";
        }
        else {
            echo "El numero {$num} es distinto que {$num2}";
        }
    }

    $num1 = 10;
    $num2 = 10;
    
    comprobarNum($num1, $num2);