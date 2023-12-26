<?php
    //Funcion para mostrar los datos de un array bidimensional donde en la primera dimension tengo los registros y en la segunda
    //dimension los campos mostrar los resultados en una tabla
    function mostrarDatos(array $datos): string{
        $tabla = "<table>";

        foreach ($datos as $valores) {
            $tabla .= "<tr>";

            foreach ($valores as $valor) {
                $tabla .= "<td>{$valor}</td>";
            }

            $tabla .= "</tr>";
        }

        $tabla .= "</table>";

        return $tabla;
    }


    function mostrarDatosV2(array $datos): string{
        $tabla = "<table>";

        foreach ($datos as $valores) {
            $tabla .= "<tr>";

            array_walk($valores, function($valor) use (&$tabla) {
                $tabla .= "<td>{$valor}</td>";
            }) ;

            $tabla .= "</tr>";
        };

        $tabla .= "</table>";

        return $tabla;
    }

    function mostrarDatosCabezeras(array $datos): string{
        $indices = array_keys($datos[0]);

        $tabla = "<table><tr>";

        foreach ($indices as $indice) {
            $tabla .= "<th>$indice</th>";
        }

        $tabla .= "</tr>";

        foreach ($datos as $valores) {
            $tabla .= "<tr>";  
            
            foreach ($valores as $valor) {
                $tabla .= "<td>{$valor}</td>";            
            }

            $tabla .= "</tr>";
        }

        $tabla .= "</table>";

        return $tabla;
    }

    function mostrarDatosCabezerasV2(array $datos): string{
        $indices = array_keys($datos[0]);

        $tabla = "<table><tr>";

        array_walk($indices, function($indice) use (&$tabla) {
            $tabla .= "<th>$indice</th>";
        });

        $tabla .= "</tr>";
        
        foreach ($datos as $valores) {       
            $tabla .= "<tr>";

            array_walk($valores, function($valor) use (&$tabla) {
                $tabla .= "<td>{$valor}</td>";
            });

            $tabla .= "</tr>";
        };

        $tabla .= "</table>";

        return $tabla;
    }

    $con = mysqli_connect("localhost", "root", "", "alumnos");
    $datos = $con->query("SELECT * FROM alumno")->fetch_all(MYSQLI_ASSOC);

    $datos = mostrarDatosCabezeras($datos);