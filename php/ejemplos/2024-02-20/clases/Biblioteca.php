<?php
namespace clases;

use mysqli_result;

class Biblioteca {
    function gridViewTableBotones(mysqli_result $resultados) {
        $salida = '';

        if ($resultados->num_rows > 0) {
            $registros = $resultados->fetch_all(MYSQLI_ASSOC);
            $camposMostrar = array_keys($registros[0]);

            $salida .= "<table class='table table-light table-striped table-hover text-center'>
                            <caption>Listado de Libros</caption>
                            <thead><tr>";

            // Agregar encabezados
            foreach ($camposMostrar as $campo) {
                $salida .= "<th>{$campo}</th>";
            }

            $salida .= "<th>Acciones</th></tr></thead><tbody>";

            // Agregar filas
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
}

