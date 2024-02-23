<?php
    function directorios(string $ruta = "."): array{
        //$ficheros = array_diff(@scandir($ruta), [".",".."]); //podemos quitarle los . y .. de las carpetas si lo deseamos
        $ficheros = @scandir($ruta);

        if($ficheros) {
            sort($ficheros);
        }
        else { //Si la carpeta no existe de devuelve el array vacio
            $ficheros = [];
        }

        return $ficheros;
    }

    $ruta = "prueba";
    $ficheros = directorios();

    var_dump($ficheros);