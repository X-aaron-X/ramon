<?php
    /**
     * Función para generar una tabla con datos de un resultado de MySQLi.
     *
     * @param mysqli_result $resultados El resultado de MySQLi que contiene los datos a mostrar
     * @return string La tabla HTML con los datos o "No hay datos" si no hay registros
    */
    function gridViewTableBotones(mysqli_result $resultados, array $botones): string {
        $salida = '';
    
        if ($resultados->num_rows > 0) {
            $registros = $resultados->fetch_all(MYSQLI_ASSOC);
            $camposMostrar = array_keys($registros[0]);
    
            $salida .= "<table class='table table-light table-striped table-hover text-center'>";
            $salida .= "<caption>Listado de Mensajes</caption>";
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
    
                $salida .= "<td>";
    
                foreach ($botones as $indice => $valor) {
                    if ($indice == 'Eliminar') {
                        $salida .= "<a class='btn btn-danger' href='{$valor}?id={$registro['id']}'>{$indice}</a> ";
                    }
                    elseif ($indice == 'Editar') {
                        $salida .= "<a class='btn btn-success' href='{$valor}?id={$registro['id']}'>{$indice}</a>";
                    }
                }
    
                $salida .= "</td></tr>";
            }
    
            $salida .= "</tbody></table>";
        }
        else {
            $salida = "No hay datos";
        }
    
        return $salida;
    }
    
    /**
     * Genera un menú con el título y elementos del menú dados.
     *
     * @param string $titulo El título del menú
     * @param array $elementoMenu Los elementos del menú como pares clave-valor
     * @return string El HTML generado para el menú
    */
    function menu(string $titulo, array $elementoMenu): string {
        $salida = "
            <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
                <div class='container-fluid'>
                    <h1 class='text-center display-4 text-info'> {$titulo} </h1>
                                        
                    <div class='collapse navbar-collapse'>
                        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>";

                        foreach ($elementoMenu as $indice => $valor) {
                            $salida .= "<li class='nav-item'>
                                            <a class='nav-link text-light' href='{$valor}'>{$indice}</a>
                                        </li>";
                        }
        $salida .= "
                        </ul>
                    </div>
                </div>
            </nav>";

            return $salida;
    }