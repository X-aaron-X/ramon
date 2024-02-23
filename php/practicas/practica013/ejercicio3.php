<?php
    function numDosArgumentos(int $numInicio, int $numFin) {
        for ($i = $numInicio; $i <= $numFin; $i++) {
            echo "{$i} <br>";
        }
    }

    $numInicio = 2;
    $numFin = 20;

    numDosArgumentos($numInicio, $numFin);