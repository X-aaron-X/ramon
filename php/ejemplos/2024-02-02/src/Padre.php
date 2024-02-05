<?php
    namespace src;

    class Padre {
        public string $nombre;
        public string $apellidos;
        private string $tipo;
        public int $edad;
        protected int $altura;
        public int $nivel;

        public function __construct(string $nombre, string $apellidos, int $edad, int $altura) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->tipo = "padre";
            $this->edad = $edad;
            $this->altura = $altura;
            $this->nivel = 1;
        }

        public function presentarme() {
            return "Soy el padre";
        }

        public function asignar($nombre, $apellidos){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function getTipo() {
            return $this->tipo;;
        }
    }