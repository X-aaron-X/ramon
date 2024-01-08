<?php
function operacion($a, $b)
{
    return $a + $b;
}

function operacion1($a, $b, $r)
{
    $r = $a + $b;
    return $r;
}

function operacion2($a, $b)
{
    // aqui no existen numero1 y numero2
    // opcion1
    global $resultado; // ahora la variable resultado es la global
    $resultado = $a + $b;

    // opcion2
    //$_GLOBALS["resultado"] = $a + $b;
}

function operacion3($a, $b, &$r)
{
    $r = $a + $b;
}

$numero1 = 2;
$numero2 = 3;

$resultado = 0;
operacion($numero1, $numero2, $resultado);
echo $resultado;

$resultado = 0;
$resultado = operacion($numero1, $numero2);
echo $resultado; // 5


$resultado = 0;
operacion1($numero1, $numero2, $resultado);
echo $resultado; // 0

$resultado = 0;
operacion2($numero1, $numero2);
echo $resultado; // 5
