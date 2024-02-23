<?php
    function mostrar() {
        foreach (func_get_args() as $valor) {
            echo "<br /> $valor <br />";
        }
    }

    $fecha = mktime(0, 0, 0, 5, 1, 2010);

    var_dump(...[getdate()]); //Obetemos la fecha y la hora actual del servidor apache en un array
    var_dump(...[getdate($fecha)]); //Obetenemos la fecha y la hora del dia 1/5/2010 en un array
    var_dump(...[localtime()]); //Obetenemos la fecha y la hora actual local en un array ordenado
    var_dump(...[localtime(time(), TRUE)]); //Obetenemos la fecha y la hora actual local en un array asociativo