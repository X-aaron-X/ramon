<?php
    function sumaArray(array $arrayNum): int {
        $suma = 0;
        $suma = array_sum($arrayNum);
        
        return $suma;
    }

    $arrayNum = [1, 2, 3, 4, 5];
    echo sumaArray($arrayNum);