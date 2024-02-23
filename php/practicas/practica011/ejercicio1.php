<?php
    function ejercicio1(int $numero, int $minimo, int $maximo): array{
        $numerosVector = [];

        for($i = 0; $i < $numero; $i++){
            $numerosVector[] = mt_rand($minimo, $maximo);
        }

        return $numerosVector;
    }

    $vector[] = ejercicio1(5, 1, 100);

    var_dump($vector);