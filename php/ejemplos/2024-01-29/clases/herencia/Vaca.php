<?php
    namespace clases\herencias;

    class Vaca extends Animal{
        private string $direccion;
        private string $granja;

        /**
         * Get the value of direccion
         *
         * @return string
        */
        public function getDireccion(): string {
            return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @param string $direccion
         *
         * @return self
        */
        public function setDireccion(string $direccion): self {
            $this->direccion = $direccion;

            return $this;
        }

        /**
         * Get the value of granja
         *
         * @return string
         */
        public function getGranja(): string {
            return $this->granja;
        }

        /**
         * Set the value of granja
         *
         * @param string $granja
         *
         * @return self
        */
        public function setGranja(string $granja): self {
            $this->granja = $granja;

            return $this;
        }

        public function __construct(string $nombre = "", float $peso = 0, string $color = "", string $direccion = "", string $granja = "") {
            $this->setNombre($nombre);
            $this->setPeso($peso);
            $this->setColor($color);
            $this->setDireccion($direccion);
            $this->setGranja($granja);
        }
    }