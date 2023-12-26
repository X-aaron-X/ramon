<?php
    $cumple = strtotime("12/13/1990");
    $proximoCumple = mktime(0, 0, 0, 12, 13, date("Y"));
    $feachaActual = strtotime("now");

    if ($proximoCumple < $feachaActual) {
        $proximoCumple = mktime(0, 0, 0, 12, 13, date("Y")+1);
    }

    $segundosDia = 60 * 60 * 24;
    $dias = ($proximoCumple - $feachaActual) / $segundosDia;

    echo "El numero de dias que falta son: " . (int)($dias) . "<br />";

    $meses = $dias / 30;

    echo "El numero de meses que falta son: " . (int)($meses);
