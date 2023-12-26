<?php
    //Creo una variable llamada numero y le coloco un numero entero
    $numero = mt_rand(1, 20);

    //Imprimir en una lista los numeros desde el 1 hasta el numero de la variable numero
    //Usando un bucle for
    echo "<ul>";

    for ($i = 1; $i <= $numero; $i++) {
        echo "<li> {$i} </li>";
    }

    echo "</ul>";