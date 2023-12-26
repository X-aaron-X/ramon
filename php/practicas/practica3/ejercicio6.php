<?php
    $vocales = ['a','e','i','o','u'];

    //Mostrar el numero de elementos de vocales utilizando una funcion
    echo count($vocales) . "<br>";

    //Mostrar una vocal aletoria utilizando mt_rand
    $indiceVocal = mt_rand(0, count($vocales) -1);
    echo $vocales[$indiceVocal] . "<br>";

    //Mostrar otra vocal aletoria utilizando mt_rand
    $indiceVocal2 = mt_rand(0, count($vocales) -1);
    echo $vocales[$indiceVocal2];