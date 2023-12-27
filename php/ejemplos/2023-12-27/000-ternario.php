<?php
    $nota = 5;

    //indicear si esta aprobado o suspenso
    //si la nota es mayor o igual a 5 es aprobado en caso contrario suspenso

    $resultado = ($nota >= 5) ? "Aprobado" : "Suspenso";
    echo $resultado;