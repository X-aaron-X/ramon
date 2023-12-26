<?php
    // funcion que recibe un array y le quita el ultimo elemento devuelve el elemento quitado
    function quitar(array &$dato): string {
        $ultimo = null;
        $ultimo = array_pop($dato);

        return $ultimo;
    }

    // variables
    $datos = ["uno", "dos", "tres"];
    $ultimo = null;

    // llamar a la funcion y almacenar el resultado en ultimo
    $ultimo = quitar($datos);
    // mostrar resultados
?>
<div>
    Uno, Dos, tres
</div>
<div>
    Datos sin el ultimo:
    <pre>
    <?php print_r($datos) ?>
</div>
<div>
    Ultimo: <?= $ultimo ?>
</div>