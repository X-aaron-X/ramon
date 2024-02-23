<?php
    namespace src;

    class Persona {
        private ?string $nombre;
        private ?int $edad;

        public function __construct() {
            $this->nombre = null;
            $this->edad = null;
        }

        public function __toString(): string {
            $texto = "Nombre: {$this->nombre} <br>";
            $texto .= "Edad: {$this->edad} <br>";

            return $texto;
        }

        /**
         * Get the value of nombre
         *
         * @return ?string
        */
        public function getNombre(): ?string {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @param ?string $nombre
         *
         * @return self
        */
        public function setNombre(string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of edad
         *
         * @return ?int
        */
        public function getEdad(): ?int  {
            return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @param ?int $edad
         *
         * @return self
         */
        public function setEdad(int $edad): self {
            $this->edad = $edad;

            return $this;
        }
    }