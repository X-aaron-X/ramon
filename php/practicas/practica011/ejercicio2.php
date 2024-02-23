<?php
    function ejercicio1(int $numero, int $minimo, int $maximo, array &$resultado){
        $resultado = [];

        for($i = 0; $i < $numero; $i++){
            $resultado[] = mt_rand($minimo, $maximo);
        }
    }

    $resultado = [];
    ejercicio1(5, 1, 100, $resultado);

    var_dump($resultado);