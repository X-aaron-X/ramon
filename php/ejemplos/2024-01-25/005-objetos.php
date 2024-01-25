<?php
    //Importo la clase al espacio de nombre actual
    use clases\profesor\Texto;

    spl_autoload_register(function($clase){
        require "{$clase}.php";
    });

    $objeto = new Texto();

    echo $objeto->mostrar();