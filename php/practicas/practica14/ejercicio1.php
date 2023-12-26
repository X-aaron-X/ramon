<?php
    function mostrar() {
        static $c = 0; //contador estatico

        foreach (func_get_args() as $valor) {
            echo "<br /> $c - $valor <br />"; //Muestra el contador estatico y el valor
            $c++; //Sumamos el contador
        }
    }

    $fechaActual = time();

    mostrar("Raro, raro:", $fechaActual); //Muestra la fecha actual en formato unix
    mostrar(date("d/m/Y", $fechaActual)); //Muestra la fecha actual en formato dia/mes/año pasado el formato unix

    mostrar(date("d/m/Y")); //Muestra la fecha actual

    //Muestra el dia actual | Muestra el dia actual | Muestra el dia actual en formato texto corto
    mostrar(date("j"),date("d"),date("D")); 

    //Muestra numericamente ISO del dia | Muestra el mes con texto | Muestra el mes en formato numerico
    mostrar(date("N"),date("F"),date("m"));

    //Muestra el año en formato de 4 digitos | Muestra el año en formato de 2 digitos
    mostrar(date("Y"),date("y"));