<?php
    /**
     * La función gridViewTable2 genera una tabla HTML basada en el mysqli_result. Los registros se lo tenemos que pasar con un objeto mysqli_result
     *
     * @param mysqli_result $resultados El objeto mysqli_result que contiene los resultados de la consulta
     * @param array $camposMostrar Un array opcional de campos para mostrar en la tabla
     * @return string La tabla HTML como una cadena de texto
    */
    function gridViewTable(mysqli_result $resultados, array $camposMostrar = null): string {
        if ($resultados->num_rows > 0) {
            //Creo un array con los registros que quiero mostrar
            $registros = $resultados->fetch_all(MYSQLI_ASSOC);

            if (is_null($camposMostrar)) {
                // quiero comprobar si el registro es un objeto
                if (is_object($registros[0])) {
                    // si el primer registro es un objeto
                    $camposMostrar = array_keys(get_object_vars($registros[0]));
                }
                else {
                    // si el primer registro no es un objeto
                    $camposMostrar = array_keys($registros[0]);
                }
            }

            $salida = "<table class='table table-light table-striped table-hover text-center'>
                            <caption>Listado de Ussuario</caption>";

            // cabecera
            $salida .= "<thead><tr>";

            foreach ($camposMostrar as $campo) {
                $salida .= "<th>{$campo}</th>";
            }
            
            $salida .= "</tr></thead>";
    
            // muestro los registros
            foreach ($registros as $registro) {
                $salida .= "<tr>";

                foreach ($camposMostrar as $campo) {
                    if (is_object($registro)) {
                        // si el registro es un objeto
                        $salida .= "<td>" . $registro->$campo . "</td>";
                    } else {
                        // si el registro no es un objeto
                        $salida .= "<td>" . $registro[$campo] . "</td>";
                    }
                }
                $salida .= "</tr>";
            }
    
            $salida .= "</table>";
        }
        else {
            $salida = "<div class=\"row mb-3 col-sm-2\"";
                $salida .= "No hay datos";
            $salida .= "</div>";
        }

        return $salida;
    }

    function gridViewTable2(mysqli_result $resultados, array $camposMostrar = null): string {
        // leo el primer registro en un array unidimensional asociativo
        $registro = $resultados->fetch_assoc();

        if(count($registro) > 0) {
            $salida = "<table class='table table-light table-striped table-hover text-center'>
                    <caption>Listado de Ussuario</caption>";

            if (is_null($camposMostrar)) {
                $camposMostrar = array_keys($registro);
            }
    
            // cabecera
            $salida .= "<thead><tr>";

            foreach ($camposMostrar as $campo) {
                $salida .= "<td>" . $campo . "</td>";
            }

            $salida .= "</tr></thead>";
    
            // muestro el primer registro
            $salida .= "<tr>";
            foreach ($camposMostrar as $campo) {
                $salida .= "<td>" . $registro[$campo] . "</td>";
            }
            $salida .= "</tr>";

            // creo un array con los registros
            while ($registro = $resultados->fetch_array()) {
                $salida .= "<tr>";

                foreach ($camposMostrar as $campo) {
                    $salida .= "<td>" . $registro[$campo] . "</td>";
                }

                $salida .= "</tr>";
            }

            $salida .= "</table>";
        }
        else {
            $salida = "<div class=\"row mb-3 col-sm-2\"
                            No hay datos
                        </div>";
        }

        return $salida;
    }

    /**
     * Genera una tabla HTML basada en los datos de mysqli_result.
     *
     * @param mysqli_result $resultados El objeto mysqli_result que contiene los resultados de la consulta
     * @param array $camposMostrar Un array opcional de campos para mostrar en la tabla
     * @return string La tabla HTML generada basada en los resultados de la consulta
    */
    function gridViewTable3(mysqli_result $resultados, array $camposMostrar = null): string {
        if ($resultados->num_rows > 0) {
            $registro = $resultados->fetch_object();

            if (is_null($camposMostrar)) {
                $camposMostrar = array_keys(get_object_vars($registro));
            }

            $salida = "<table class='table table-light table-striped table-hover text-center'>
                            <caption>Listado de Ussuario</caption>";

            $salida .= "<thead><tr>";

            foreach ($camposMostrar as $campo) {
                $salida .= "<td>" . $campo . "</td>";
            }
    
            
            $salida .= "</tr></thead>";

            // Pongo el puntero al principio de $resultados
            $resultados->data_seek(0);
    
            // muestro los registros
            while ($registro = $resultados->fetch_object()) {
                $salida .= "<tr>";
                foreach ($camposMostrar as $campo) {
                    $salida .= "<td>" . $registro->$campo . "</td>";
                }
                $salida .= "</tr>";
            }
    
    
            $salida .= "</table>";
        }
        else {
            $salida = "<div class=\"row mb-3 col-sm-2\"";
                $salida .= "No hay datos";
            $salida .= "</div>";
        }

        return $salida;
    }