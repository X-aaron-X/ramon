<?php
    namespace src;

    class Hijo extends Padre {
        // la propiedad tipo que es privada la sobreescribo    
        public string $tipo;

        // sobreescritura constructor
        public function __construct(string $nombre, string $apellidos, int $edad, int $altura) {
            parent::__construct($nombre, $apellidos, $edad, $altura, "padre");
            $this->tipo = "hijo";
        }

        // sobreescribo el metodo getTipo
        public function getTipo() {
            return $this->tipo;
        }

        // sobreescribo el metodo presentarme
        public function presentarme() {
            return "Soy el hijo";
        }
    }