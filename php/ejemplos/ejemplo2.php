<?php
    /*
    Crear variables e inicializarlas
    */

    $titulo = "Mi primera pagina web";
    $numero = 1;
    $resultado = 0;

    /* Precesamiento */

    $numero++; //2
?>
    $numero = <?= $numero ?> | $resultado = <?= $resultado ?> <br>

<?php
    $numero + 1; //2
?>

    $numero = <?= $numero ?> | $resultado = <?= $resultado ?> <br>
<?php
    $numero = $numero + 1; //3
?>

    $numero = <?= $numero ?> | $resultado = <?= $resultado ?> <br>
<?php
    ++$numero; //4
?>

    $numero = <?= $numero ?> | $resultado = <?= $resultado ?> <br>
<?php
    $resultado = ++$numero; //numero 5 | resultado = 5
?>

    $numero = <?= $numero ?> | $resultado = <?= $resultado ?> <br>
<?php
    $resultado = $numero++; //numero = 6 | resultado = 5
?>

    $numero = <?= $numero ?> | $resultado = <?= $resultado ?>
<?php

?>
    <h1><?= $titulo ?></h1>