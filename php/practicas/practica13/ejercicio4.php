<?php
    function sumaDosNum(int $num1, int $num2){
        echo "La suma de {$num1} + {$num2} = " . ($num1 + $num2) . "<br>";
    }

    function sumaTresNum(int $num1, int $num2, int $num3){
        echo "La suma de {$num1} + {$num2} + {$num3} = " . ($num1 + $num2 + $num3) . "<br>";
    }

    $num1 = 10;
    $num2 = 20;
    $num3 = 40;

    sumaDosNum($num1, $num2);
    sumaTresNum($num1, $num2, $num3);
