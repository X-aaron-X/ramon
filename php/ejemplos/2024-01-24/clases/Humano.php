<?php
    class Humano {
        public string $nombre;
        public string $sexo;
        public string $fechaNacimiento;

        public function __construct($nombre = "", $sexo = "", $fechaNacimiento = "") {
            $this->nombre = $nombre;
            $this->sexo = $sexo;
            $this->fechaNacimiento = $fechaNacimiento;
        }

        /**
         * Un método para presentar información sobre la persona.
         *
         * @return string "Hola, soy {$this->nombre} y mi fecha de nacimiento es {$this->fechaNacimiento} <br>"
        */
        public function presentarse () {
            return "Hola, soy {$this->nombre} y mi fecha de nacimiento es {$this->fechaNacimiento} <br>";
        }
    }