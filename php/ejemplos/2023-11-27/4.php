<?php
    $dias = ["Lunes","Martes","Miercoles","Jueves","Viernes",];
    
    //Esto no se puede realizar
    //echo $dias

    //Esto si pero solo para pruebas
    echo "<pre>";
    var_dump($dias);

    //Quiero acceder al segundo dia
    echo "<hr> {$dias[1]} <hr>";

    //Escribir
    $dias[2] = "MIERCOLES";

    var_dump($dias);