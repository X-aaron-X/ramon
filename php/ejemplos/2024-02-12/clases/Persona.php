<?php
    namespace clases;

    class Persona {
        public int $id;
        public string $nombre;
        public string $apellidos;
        public string $edad;
        public string $fechaNacimiento;
        public string $poblacion;
        public string $codigoPostal;

        public function __toString() {
            $salida = "<ul class=\"list-group\">";

            foreach ($this as $campo => $valor) {
                $salida .= "<li class=\"list-group-item list-group-item-action text-center\">{$campo}: {$valor}</li>";
            }

            $salida .= "</ul>";

            return $salida;
        }
    }