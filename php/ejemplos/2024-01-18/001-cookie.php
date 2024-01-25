<?php
    // Establecer una cookie que caduca en 1 hora
    $nombreCookie = "Alpe";
    $valorCookie = "Hola, esta es mi cookie creada en clase de alpe";
    $tiempoCaducidad = time() + 3600; // Caduca en 1 hora (3600 segundos)

    // esta funcion tiene que realizarse antes de imprimir nada 
    // para que la cookie se cree
    // Las cookies se envían en las cabeceras 
    // nombreCookie es el nombre con que identificará a la cookie.
    //    Los nombres de cookie no deben coincidir con los nombres de los controles de los formularios
    // valorCookie es el valor que se guarda en la cookie
    // tiempoCaducidad es el momento en que se borrará automáticamente la cookie,
    //    expresado como tiempo Unix. Para calcularlo se suele utilizar la expresión
    //    time()+$duracion donde $duracion es el número de segundos que debe
    //    permanecer la cookie en el ordenador del cliente
    //    Si se omite, la cookie se borrará al cerrar el navegador

    // Los valores de las cookies se pueden consultar en cualquier página
    // del mismo dominio y se almacenan en la matriz $_COOKIE y en $_REQUEST
    // (por eso no deben coincidir los nombres de las cookies con los de los controles de los formularios)
    setcookie($nombreCookie, $valorCookie, $tiempoCaducidad);
