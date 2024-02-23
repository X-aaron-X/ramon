<?php
    $letras = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E','T'];
    //51583002

    // 1º
    $dni = 51583002;
    $letraDni = "M";

    // 2º
    if ($dni > 0 && $dni <= 99999999) {
        // 3º
        $divisionLetra = $dni % 23;

        if ($letraDni == $letras[$divisionLetra]) {
            echo "La letra \"{$letraDni}\" son iguales";
        }
        else {
            echo "La letra introducida no es correcta";
        }
    }
    else {
        echo "El numero proporcionado no es valido";
    }

