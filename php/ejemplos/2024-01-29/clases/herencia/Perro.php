<?php
    namespace clases\herencia;

    class Perro extends Animal { //El perro hereda las propiedades de animal
        public bool $vacunado;
        public ?Persona $persona;

        public function __construct(string $nombre = "", float $peso = 0, string $color = "", bool $vacunado = false, ?Persona $persona = null) {
            parent::__construct($nombre, $peso, $color);
            $this->vacunado = $vacunado;
            $this->persona = $persona;
        }
    }

