<?php
    function arrayOrdenado(array $array): array{
        sort($array);

        return $array;
    }

    $array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];

    echo implode("<br>", arrayOrdenado($array));