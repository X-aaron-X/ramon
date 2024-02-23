<?php
    $numColores = 10;

    function coloresRgb (int $numColores): array{
        $colores = [];

        // for ($i = 0; $i < $numColores; $i++) {
        //     $colores[] = '#' . dechex(rand(0, 16777215));
        // }

        for ($i = 1; $i <= $numColores; $i++) {
            $colores[$i] = "#";

            for ($x = 1; $x < 7; $x++) { 
                $colores[$i] .= dechex(mt_rand(0, 15));
            }
        }

        return $colores;
    }

    $colores = coloresRgb($numColores);

    foreach ($colores as $valor) {
        echo "<div style=\"background-color: {$valor};width: 100%;height: 10%;\"> </div>";
    }