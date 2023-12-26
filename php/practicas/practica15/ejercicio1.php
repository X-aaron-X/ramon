<?php
    function getGrade(int $num1, int $num2, int $num3): string{
        $media = ($num1 + $num2 + $num3) / 3;
        $letra = "";

        if($media >= 90){
            $letra = "A";
        }
        else if ($media >= 80) {
            $letra = "B";
        }
        else if ($media >= 70) {
            $letra = "C";
        }
        else if ($media >= 60) {
            $letra = "D";
        }
        else {
            $letra = "F";
        }


        return $letra;
    }

    echo getGrade(1, 3, 4);