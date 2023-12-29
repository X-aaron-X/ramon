<?php
    function spinWords(string $str): string{
        $salida = "";
        $palabras = explode(" ", $str);

        array_walk($palabras, function(&$palabra){
            $palabra = strlen($palabra) >= 5 ? strrev($palabra) : $palabra;
        });

        $salida = implode(" ", $palabras);
        
        return $salida;
    }

    echo spinWords("Esto es un test dificil");