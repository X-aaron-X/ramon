<?php
    function mostrar() {
        foreach (func_get_args() as $valor) {
            echo "<br /> $valor <br />";
        }
    }

    $dia = 23;
    $mes = 1;
    $year = 2004;

    $fecha = mktime(0, 0, 0, $mes, $dia, $year); //Obetemos la fecha en formato Unix
    mostrar(...[date("d/m/y", $fecha)]); //Mostramos la fecha del formato unix a dia/mes/año solo con dos digitos

    $dia = 35;
    $mes = 1;
    $year = 2004;

    if (checkdate($mes, $dia, $year)) { //Comprobamos la fecha actual
        $fecha = mktime(0, 0, 0, $mes, $dia, $year); //Obetemos la fecha actual en formato Unix
    }
    else {
        $fecha = mktime(0, 0, 0, 12, 1, 2000); //Obetemos la fecha mes-dia-año en formato Unix
    }

    mostrar(...[date("d/m/y", $fecha)]); //Mostramos la fecha del formato unix a dia/mes/año solo con dos digitos