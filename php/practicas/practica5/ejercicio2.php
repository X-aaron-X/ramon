<?php
    $a = 10;
    $b = 3;

    if (($a % 2) == 0) {
        echo "punto 1 <br>"; //estra por if porque el resto es 0
    }
    else {
        echo "punto 2 <br>";
    }

    echo "punto 3 <hr>";

    if (($b % 2) == 0) {
        echo "punto 1 <br>";
    }
    else {
        echo "punto 2 <br>"; //estra por else porque el resto no es
    }

    echo "punto 3";