<?php
    session_start();

    if (isset($_SESSION['visitas'])) {
        //Recuperamos el nombre de la sesion
        echo "Nombre: " . session_name() . "<br>";

        //Recuperamos el ID de la sesion
        echo "ID: " . session_id() . "<br>";

        //Recuperamos el id de la sesion a traves de la cookie
        echo "Cookie: " . $_COOKIE[session_name()] . "<br>";
    }