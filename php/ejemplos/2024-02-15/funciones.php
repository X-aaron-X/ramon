<?php
    /**
     * función controlErrores mysqli_report.
    */
    function controlErrores() {
        // anulo errores en pantalla
        //error_reporting(0);

        // anulo errores en mysql
        mysqli_report(MYSQLI_REPORT_OFF);
    }

    function gridViewTable(mysqli_result $resultados) {
        if ($resultados->num_rows > 0) {

            $registros = $resultados->fetch_all(MYSQLI_ASSOC);
            $camposMostrar = array_keys($registros[0]);

            $salida = "<table class='table table-light table-striped table-hover text-center'>
                            <caption>Listado de Usuarios</caption>";

            $salida .= "<thead><tr>";

            foreach ($camposMostrar as $campo) {
                $salida .= "<th>{$campo}</th>";
            }
            
            $salida .= "</tr></thead><tbody>";
    
            foreach ($registros as $registro) {
                $salida .= "<tr>";

                foreach ($camposMostrar as $campo) {

                    $salida .= "<td>" . $registro[$campo] . "</td>";
                }
                $salida .= "</tr>";
            }
    
            $salida .= "</tbody></table>";
        }
        else {
            $salida = "No hay datos";
        }

        return $salida;
    }

    function gridViewTableBotones(mysqli_result $resultados) {
        if ($resultados->num_rows > 0) {

            $registros = $resultados->fetch_all(MYSQLI_ASSOC);
            $camposMostrar = array_keys($registros[0]);

            $salida = "<table class='table table-light table-striped table-hover text-center'>
                            <caption>Listado de Usuarios</caption>";

            $salida .= "<thead><tr>";

            foreach ($camposMostrar as $campo) {
                $salida .= "<th>{$campo}</th>";
            }

            $salida .= "<th>Acciones</th>";
            
            $salida .= "</tr></thead><tbody>";
    
            foreach ($registros as $registro) {
                $salida .= "<tr>";

                foreach ($camposMostrar as $campo) {

                    $salida .= "<td class='align-middle'>" . $registro[$campo] . "</td>";
                }

                $salida .= "<td>
                                <a href='009-actualizarRegistroFormulario.php?id={$registro['id']}' class='btn btn-success'>Editar</a>
                                <a href='010-eliminarRegistroFormulario.php?id={$registro['id']}' class='btn btn-danger'>Eliminar</a>
                            </td>";

                $salida .= "</tr>";
            }
    
            $salida .= "</tbody></table>";
        }
        else {
            $salida = "No hay datos";
        }

        return $salida;
    }