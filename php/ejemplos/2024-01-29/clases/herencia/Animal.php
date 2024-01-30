<?php
    namespace clases\herencia;

    class Animal {
        public string $nombre;
        public float $peso;
        public string $color;

        public function __construct(string $nombre = "animal", float $peso = 0, string $color = "sin color") {
            $this->nombre = strtoupper($nombre);
            $this->peso = $peso;
            $this->color = $color;
        }

        /**
         * Una descripción del animal con su nombre, peso y color.
         *
         * @return string
        */
        public function descripcion(): string {
            return "{$this->nombre} tiene {$this->peso} kg y es de color {$this->color}.";
        }
    }
