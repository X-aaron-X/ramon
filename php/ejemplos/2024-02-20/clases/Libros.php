<?php
    namespace clases;

    class Libros extends Biblioteca {
        public int $id;
        public string $titulo;
        public int $paginas;
        public string $fechaPublicacion;

        public function __construct($datos = []){
            if (count($datos) > 0) {
                foreach ($datos as $nombreCampo => $valorCampo) {
                    if (property_exists($this, $nombreCampo)) {
                        $this->$nombreCampo = $valorCampo;
                    }
                }
            }
        }
    }