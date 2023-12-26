<?php
    function mostrar() {
        foreach (func_get_args() as $valor) {
            echo "<br /> $valor <br />";
        }
    }

    $fecha = "2000/12/25";

    mostrar(...[date("d/m/Y", strtotime($fecha))]); //Coge la $fecha y lo trasforma en formato unix y lo muestra como una fecha d/m/Y 
    mostrar(...[date("d/m/Y", strtotime("now"))]); //Coge la fecha actual en formato unix y lo muestra como fecha d/m/Y
    mostrar(...[date("d/m/Y", strtotime("+1 day"))]); //Coge la fecha de nañana en formato unix y lo muestra como fecha d/m/Y
    mostrar(...[date("d/m/Y", strtotime("+1 day", strtotime($fecha)))]); //Coge la $fecha y le suma 1 dia y lo muestra como fecha d/m/Y
    mostrar(...[date("d/m/Y", strtotime("previous Monday"))]); //Coge la fecha actual y te muestra el Lunes de esa seamana

    $fecha = "10/12/12";
    $fecha = explode("/", $fecha); //Crear un array con la fecha d/m/Y y lo separa cada vez que encuentre el caracter "/"
    $fecha = implode("/", array_reverse($fecha)); //Convierte el array a d/m/Y y lo muestra de forma inversa poniendo como separador "/"
    mostrar(...[date("d/m/Y", strtotime($fecha))]); //Coge la $fecha y lo trasforma en formato unix y lo muestra como una fecha d/m/Y 