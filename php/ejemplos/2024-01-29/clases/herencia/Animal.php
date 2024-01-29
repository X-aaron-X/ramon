<?php
    namespace clases\herencias;

    class Animal {
        private string $nombre;
        private float $peso;
        private string $color;

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
         * @return float
        */
        public function getPeso(): float {
            return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @param float $peso
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

        public function __construct(string $nombre = "animal", float $peso = 0, string $color = "Sin Color") {
            $this->setNombre(strtoupper($nombre));
            $this->setPeso($peso);
            $this->setColor($color);
        }
    }