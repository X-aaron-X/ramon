<?php
    /**
     * Genera un array con un mensaje y un código basado en dos fechas de entrada.
     *
     * @param string $fechaInicio La fecha de inicio.
     * @param string $fechaFin La fecha de fin.
     * @return array El array que contiene el mensaje y el código.
     */
    function mostrar_resultados($fechaInicio, $fechaFin): array {
        $salida = [];
        $texto = '';
        $mensaje = '';

        if (strtotime($fechaInicio) < strtotime($fechaFin)) {
            $texto = '2';
            $mensaje = "correcto";
        }
        else {
            $texto = 'La fecha de fin debe ser mayor que la de inicio';
            $mensaje = "error";
        }

        $salida = [$mensaje, $texto];

        return $salida;
    }