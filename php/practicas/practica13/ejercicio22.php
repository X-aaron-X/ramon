<?php
    function compararArrays(array $array1, array $array2): int{
        $numCoincidencias = 0;
        $numCoincidencias = count(array_intersect($array1, $array2));

        return $numCoincidencias;
    }

    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(1, 10, 13, 4, 5);

    echo compararArrays($array1, $array2);
