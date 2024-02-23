<?php
    $numColores = 10;

    function coloresRgb (int $numColores, $almuadilla): array{
        $colores = [];

        for ($i = 1; $i <= $numColores; $i++) {
            $colores[$i] = "";

            if ($almuadilla) {
                $colores[$i] = "#";
            }

            for ($x = 1; $x < 7; $x++) {
                $colores[$i] .= dechex(mt_rand(0, 15));
                
            }
        }

        return $colores;
    }

    $almuadilla = true;
    $colores = coloresRgb($numColores, $almuadilla);

    if ($almuadilla) {
        foreach ($colores as $valor) {
            echo "<div style=\"background-color: {$valor};width: 100%;height: 10%;\"> </div>";
        }
    }
    else {
        var_dump($colores);
    }