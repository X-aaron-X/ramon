<?php
    function sumaArrays(array $array1, array $array2, array $array3): int {
        $suma = 0;

        $suma = array_sum($array1);
        $suma += array_sum($array2);
        $suma += array_sum($array3);

        return $suma;
    }

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $array3 = [7, 8, 9];

    echo sumaArrays($array1, $array2, $array3);