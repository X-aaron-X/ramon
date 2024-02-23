<?php
    namespace clases;

    class Persona {
        public int $idPersona;
        public string $nombre;
        public int $edad;

        // el constructor si tu tienes esta clase para fetch_object se llama despues de inicializar las propiedades
        public function __construct($datos = []) {
            if (count($datos) > 0) {
                foreach ($datos as $nombreCampo => $valorCampo) {
                    if (property_exists($this, $nombreCampo)) {
                        $this->$nombreCampo = $valorCampo;
                    }
                }
            }
        }

        public function __toString() {
            $salida = " <ul>
                            <li>ID PERSONA: {$this->idPersona}</li>
                            <li>NOMBRE: {$this->nombre}</li>
                            <li>EDAD: {$this->edad}</li>
                        </ul>";
                        
            return $salida; 
        }
    }