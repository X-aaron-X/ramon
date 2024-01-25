<?php
    spl_autoload_register(function($clase){
        require "{$clase}.php";
    });

    //Crear un ojeto de clase Texto de aaron y otro de profesor
    $aaron = new clases\aaron\Texto();
    $profesor = new clases\profesor\Texto();
    
    echo $aaron->mostrar();
    echo $profesor->mostrar();