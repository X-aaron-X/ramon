<?php
    /**
     * Una función que recibe dos cadenas que representan fechas y devuelve un array
     * que contiene un mensaje y un texto basado en la validez de las fechas.
     *
     * @param string $fechaInicio La fecha de inicio en el formato 'YYYY-MM-DD'
     * @param string $fechaFin La fecha de fin en el formato 'YYYY-MM-DD'
     * @return array Un array que contiene un mensaje y un texto basado en la validez de las fechas
     */
    function mostrar_resultados(string $fechaInicio, string $fechaFin): array {
        $salida = [];

        if (strlen($fechaInicio) == 10 && strlen($fechaFin) == 10) {
            if (strtotime($fechaInicio) < strtotime($fechaFin)) {
                $texto = '2';
                $mensaje = "correcto";
            }
            else {
                $texto = 'La fecha de fin debe ser mayor que la de inicio';
                $mensaje = "error";
            }    
        }
        else {
            $texto = 'La fecha tiene no tiene el formato correcto';
            $mensaje = "error";
        }
        
        $salida = [$mensaje, $texto];

        return $salida;
    }