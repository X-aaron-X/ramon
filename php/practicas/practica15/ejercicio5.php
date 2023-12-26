<?php
    function suqre_sum (array $num): int {
        $salida = 0;

        $salida = array_sum(
                    array_map(function ($valor) {
                        return $valor ** 2;
                }, $num));

        return $salida;
    }

    echo suqre_sum([1,2,2]);