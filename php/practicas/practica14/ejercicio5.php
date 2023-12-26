<?php
    $maximo = strtotime(date("Y/m/d"));
    $minimo = strtotime("1/1/2000");

    for ($i=0; $i < 100; $i++) { 
        echo date("d-m-Y", rand($minimo, $maximo)) . "<br>";
    }