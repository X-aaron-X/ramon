<?php
    /**
     * Función para generar una tabla con datos de un resultado de MySQLi.
     *
     * @param mysqli_result $resultados El resultado de MySQLi que contiene los datos a mostrar
     * @return string La tabla HTML con los datos o "No hay datos" si no hay registros
    */
    function gridViewTableBotones(mysqli_result $resultados) {
        if ($resultados->num_rows > 0) {

            $registros = $resultados->fetch_all(MYSQLI_ASSOC);
            $camposMostrar = array_keys($registros[0]);

            $salida = "<table class='table table-light table-striped table-hover text-center'>
                            <caption>Listado de Libros</caption>";

            $salida .= "<thead><tr>";

            foreach ($camposMostrar as $campo) {
                $salida .= "<th>{$campo}</th>";
            }

            $salida .= "<th>Acciones</th>";
            
            $salida .= "</tr></thead><tbody>";
    
            foreach ($registros as $registro) {
                $salida .= "<tr>";

                foreach ($camposMostrar as $campo) {
                    $salida .= "<td class='align-middle'>{$registro[$campo]}</td>";
                }

                $salida .= "<td>
                                <a href='actualizar.php?id={$registro['id']}' class='btn btn-success'>Editar</a>
                                <a href='eliminar.php?id={$registro['id']}' class='btn btn-danger'>Eliminar</a>
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