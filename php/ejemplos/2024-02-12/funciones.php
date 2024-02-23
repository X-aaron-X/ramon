<?php
    /**
     * Una función que genera una tabla a partir de los registros y campos proporcionados para mostrar.
     * Pudes enviarle objetos o arrays asociativos.
     *
     * @param array $registros El array de registros que se mostrarán en la tabla
     * @param array|null $camposMostrar Los campos que se mostrarán en la tabla, por defecto es null
     * @return string La representación HTML de la tabla
    */
    function gridViewTable(array $registros, array $camposMostrar = null): string {
        if (count($registros) > 0) {
            if (is_null($camposMostrar)) {
                // Comprobamos si el primer registro es un objeto
                if (is_object($registros[0])) {
                    // si el primer registro es un objeto lo convierto en un array asociativo
                    $camposMostrar = array_keys(get_object_vars($registros[0]));
                }
                else {
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
                        $salida .= "<td> {$registro->$campo} </td>";
                    }
                    else {
                        // si el registro no es un objeto
                        $salida .= "<td> {$registro[$campo]} </td>";
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

    /**
     * Genera una vista de lista con los registros y campos a mostrar dados.
     * Pudes enviarle objetos o arrays asociativos
     *
     * @param array $registros El array de registros a mostrar
     * @param array|null $camposMostrar Los campos a mostrar
     * @return string El HTML para la vista de lista
    */
    function listView(array $registros, array $camposMostrar = null): string {
        $salida = "<div class=\"row mb-3 col-sm-2\"";

        if(count($registros) > 0) {
            if (is_null($camposMostrar)) {
                // Comprobamos si el primer registro es un objeto
                if (is_object($registros[0])) {
                    // si el primer registro es un objeto lo convierto en un array asociativo
                    $camposMostrar = array_keys(get_object_vars($registros[0]));
                }
                else {
                    $camposMostrar = array_keys($registros[0]);
                }
            }
            
            foreach ($registros as $registro) {
                $salida .= "<ul class=\"list-group\">";

                foreach ($camposMostrar as $campo) {
                    if (is_object($registro)) {
                        // si el registro es un objeto
                        $salida .= "<li class=\"list-group-item list-group-item-action text-center\"> {$registro->$campo} </li>";
                    }
                    else {
                        // si el registro no es un objeto
                        $salida .= "<li class=\"list-group-item list-group-item-action text-center\"> {$registro[$campo]} </li>";
                    }
                }

                $salida .= "</ul>";

            }
        }
        else {
            $salida .= "<ul class=\"list-group\"><li class=\"list-group-item list-group-item-action text-center\">No hay datos</li></ul>";
        }

        $salida .= "</div>";

        return $salida;
    }

    /**
     * Genera una vista de lista con los registros y campos a mostrar dados.
     * Pudes enviarle objetos o arrays asociativos
     *
     * @param array $registro
     * @param array|null $camposMostrar
     * @return string
    */
    function detailView(array $registro, array $camposMostrar = null): string {
        $salida = "<div class=\"row mb-3 col-sm-2\"";

        if (is_null($camposMostrar)) {
            $camposMostrar = array_keys($registro);
        }

        $salida = "<ul class=\"list-group\">";

        foreach ($camposMostrar as $campo) {
            $salida .= "<li class=\"list-group-item list-group-item-action text-center\">{$campo}: {$registro[$campo]}</li>";
        }
        
        $salida .= "</ul>";
        $salida .= "</div>";

        return $salida;
    }
