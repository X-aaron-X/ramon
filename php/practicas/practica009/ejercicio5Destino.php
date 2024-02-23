<?php
    $formulario = $_REQUEST;

    foreach ($formulario as $indice => $valor) {
        echo "{$indice}: {$valor} <br>";
    }