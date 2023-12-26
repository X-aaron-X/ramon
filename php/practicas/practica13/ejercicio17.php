<?php
    function contarVocales(string $palabra): int{
        $numVocales = 0;
        $vocales = ['a','e','i','o','u'];

        for($i = 0; $i < strlen($palabra); $i++){
            if (in_array(mb_strtolower($palabra[$i]), $vocales)){
                $numVocales++;
            }
        }

        return $numVocales;
    }

    $palabra = "ejemplo de clase";

    echo contarVocales($palabra);