<?php
    function mostrar() {
        foreach (func_get_args() as $valor) {
            echo "<br /> $valor <br />";
        }
    }

    setlocale(LC_ALL, 'spanish'); //ponemos las fecha y hora en español

    mostrar(strftime("%A/%B")); //nos pone el dia de la semana y el mes
    mostrar(strftime("%A", mktime(0, 0, 0, 1, 1, 1901))); //nos pone el dia de la semana del dia 1-1-1901