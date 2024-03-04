<?php
    namespace Clases;

    use mysqli;
    use mysqli_result;

    class GridView {
        
        public static function render(mysqli_result $resultados, array $camposMostrar = [], array $botones = []): string {
            $salida = "<div class='container'>";
        
            if ($resultados->num_rows > 0) {
                $registros = $resultados->fetch_all(MYSQLI_ASSOC);
        
                $salida .= "<table class='table table-light table-striped table-hover text-center'>";
                $salida .= "<thead <thead class='table-dark'>><tr>";
                
                // Compruebo si el usuario me ha pasado los camos a mostrar
                if (count($camposMostrar) == 0) {
                    // Si no he pasado ninguno, muestro todos los registros
                    $camposMostrar = array_keys($registros[0]);
                }

                foreach ($camposMostrar as $campo) {
                    $salida .= "<th>{$campo}</th>";
                }
                
                if (count($botones) > 0) {
                    $salida .= "<th>Acciones</th>";
                }

                $salida .= "</tr></thead><tbody>";
    
                foreach ($registros as $registro) {
                    $salida .= "<tr>";
        
                    foreach ($camposMostrar as $campo) {
                        $salida .= "<td class='align-middle'>" . $registro[$campo] . "</td>";
                    }

                    if (count($botones) > 0) {
                        $salida .= "<td>";

                        foreach ($botones as $indice => $valor) {
                            if ($indice == "Editar") {
                                $salida .= "<a class='btn btn-success' href='{$valor}?id={$registro['id']}'><i class='fas fa-edit'></i></a> ";
                            }
                            elseif ($indice == "Eliminar") {
                                $salida .= "<a class='btn btn-danger' href='{$valor}?id={$registro['id']}'><i class='fas fa-trash'></i></a> ";
                            }
                            elseif ($indice == "Detalles") {
                                $salida .= "<a class='btn btn-outline-primary' href='{$valor}?id={$registro['id']}'><i class='far fa-eye'></i></a> ";
                            }
                        }

                        $salida .= "</td>";
                    }
        
                    $salida .= "</tr>";
                }
        
                $salida .= "</tbody></table>";
            }
            else {
                $salida .= "<div class='alert alert-danger text-center mt-5' role='alert'>
                                <h4 class='alert-heading'>No hay registros</h4>
                            </div>";
            }

            $salida .= "</div>";

            // Colocamos el puntero de la consulta al primer registro
            $resultados->data_seek(0);
        
            return $salida;
        }
    }