<?php
    $a = 190; //Hay que modificar la siguiente variable para poder entrar en todos los "elseif"
    $b = ["poco","algo","medio","mucho","enorme"];

    if ($a < 10) {
        echo $b[0];
    }
    else if ($a < 20) {
        echo $b[1];
    }
    else if ($a < 30) {
        echo $b[2];
    }
    else if ($a < 40) {
        echo $b[3];
    }
    else {
        echo $b[4];
    }