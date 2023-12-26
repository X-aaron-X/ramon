<?php

$numero = 5;

// imprimir la torre de numeros hasta 
// el valor de la variable numero

// 1<br>
// 12<br>
// 123<br>
// 1234<br>

// para ello vamos a utilizar dos for

for ($contador = 1; $contador < $numero; $contador++) {
    for ($contador1 = 1; $contador1 <= $contador; $contador1++) {
        echo $contador1;
    }
    echo "<br>";
}
