<?php
    //Importo la clase al espacio de nombre actual
    use clases\profesor\Texto as ProfesorTexto;
    use clases\aaron\Texto as AaronTexto;

    spl_autoload_register(function($clase){
        require "{$clase}.php";
    });

    $objeto = new AaronTexto();
    $objeto2 = new ProfesorTexto();

    echo $objeto->mostrar();
    echo $objeto2->mostrar();

