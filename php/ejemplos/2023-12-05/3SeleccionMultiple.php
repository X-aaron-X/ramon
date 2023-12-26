<?php
    //Crear dos variables con dos numeros enteros
    $num1 = 10;
    $num2 = 20;
    $salida = "";

    //Quiero una variable salida que me indique 
    //si num1 es mayor que num2
    //si num2 es mayor que num1
    //o si son iguales
    
    if ($num1 > $num2) {
        $salida = "El número {$num1} es mayor que {$num2}";
    }
    else if ($num2 > $num1) {
        $salida = "El numero {$num2} es mayor que {$num1}";
    }
    else {
        $salida = "El numero {$num1} es igual que {$num2}";
    }

    echo $salida;
