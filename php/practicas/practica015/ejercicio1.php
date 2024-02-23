<?php
    function getGrade(int $num1, int $num2, int $num3): string{
        $media = ($num1 + $num2 + $num3) / 3;
        $letra = "";

        $letra = ($media >= 90) ? "A" : (($media >= 80) ? "B" : (($media >= 70) ? "C" : (($media >= 60) ? "D" : "F")));

        return $letra;
    }

    echo getGrade(1, 3, 4);