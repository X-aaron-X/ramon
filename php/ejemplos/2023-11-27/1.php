<?php
    //crear una variable de tipo numerica

    $a = 1;
    $b = 2.3;

    //crear variable de tipo string

    $c = "ejemplo";
    $d = "1";

    //crear una variable de tipo boolean

    $e = true;
    $f = false;

    //crear variable de tipo array

    $g = [1,2,"hola"];
    $h = array(23,3);

    //crear variable de tipo null

    $i = null;

    //para comprobar el valor y tipo
    //utlizamos var_dump

    var_dump($a,$d,$h);

    //para comprobar el tipo
    //gettype

    echo gettype($d);

    //para comprobar el valor
    //echo
    //utilizar la impresion corta

    echo "<div> d = {$d} </div>";
?>
    <div>
        d = <?= $d ?>
    </div>