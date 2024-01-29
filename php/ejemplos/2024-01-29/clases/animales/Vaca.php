<?php
    namespace clases\animales;

    class Vaca {
        private string $nombre;
        private float $peso;
        private string $color;
        private string $direccion;
        private string $granja;

        /**
         * Get the value of nombre
         *
         * @return string
        */
        public function getNombre(): string {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @param string $nombre
         *
         * @return self
        */
        public function setNombre(string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of peso
         *
         * @return int
        */
        public function getPeso(): float {
            return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @param int $peso
         *
         * @return self
        */
        public function setPeso(float $peso): self {
                $this->peso = $peso;

                return $this;
        }

        /**
         * Get the value of color
         *
         * @return string
        */
        public function getColor(): string {
            return $this->color;
        }

        /**
         * Set the value of color
         *
         * @param string $color
         *
         * @return self
        */
        public function setColor(string $color): self {
            $this->color = $color;

            return $this;
        }

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