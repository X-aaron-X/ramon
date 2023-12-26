<?php
    // crear una funcion que le pasas un numero de minutos y devuelve el numero de segundos 
    function conversion(int $minutos): int {
        $salida = 0;
        $salida = $minutos * 60;

        return $salida;
    }

    $segundos = null;
    // genero un numero entero entre 1 y 100
    $minutos = mt_rand(1, 100);

    // llamar a la funcion para comprobar su funcionamiento y almacenar en la variable segundos el resultado
    $segundos = conversion($minutos);
    // mostrar los resultados
?>
<div>
    Minutos <?= $minutos ?>
</div>
<div>
    Segundos <?= $segundos ?>
</div>