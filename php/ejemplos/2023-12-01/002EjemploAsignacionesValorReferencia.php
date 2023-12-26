<?php
    $numero1 = 0;
    $numero2 = $numero1; //Asigno el valor de numero1 a numero2
    $numero3 = &$numero1; //Asigno una referencia de numero1 a numero3
    //Todo lo que cambie a numero3 se lo realizo a numero1
    //Todo lo que cambie a numero1 se lo realizo a numero3
    $numero1 = 45;

    // cuanto valen las variables
    // numero1 --> 45
    // numero2 --> 0
    // numero3 --> 45
    echo "numero1 vale " . $numero1 . "<br>";
    echo "numero2 vale " . $numero2 . "<br>";
    echo "numero3 vale " . $numero3 . "<br>";

    // realizar la misma impresion sin utilizar concatenar directamente con las comillas
    echo "numero1 vale {$numero1} <br>";
    echo "numero2 vale {$numero2} <br>";
    echo "numero3 vale {$numero3} <br>";

    // realizar la misma impresion pero con el modo contraido de impresion
?>

numero1 vale <?= $numero1 ?> <br>
numero2 vale <?= $numero2 ?><br>
numero3 vale <?= $numero3 ?><br>