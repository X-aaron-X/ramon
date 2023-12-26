<?php
    // crear una funcion que le pasas un numero entero 
    // y devuelve el numero entero siguiente
    function numeroSiguiente(int $numero): int {
        $siguiente = null;
        $siguiente = ++$numero;

        return $siguiente;
    }

    $numero = 10;

    // llamar a la funcion para comprobar su funcionamiento
    $a = numeroSiguiente($numero);
?>

<div>Numero original <?= $numero ?></div>
<div>Numero siguiente <?= $a ?></div>