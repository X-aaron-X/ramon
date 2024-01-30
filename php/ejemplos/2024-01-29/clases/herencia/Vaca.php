<?php
    namespace clases\herencia;

    class Vaca extends Animal { //La vaca hereda las propiedades de animal
        public string $direccion;
        public string $granja;

        public function __construct(string $nombre = "", float $peso = 0, string $color = "", string $direccion = "", string $granja = "") {
            $this->nombre = $nombre;
            $this->peso = $peso;
            $this->color = $color;
            $this->direccion = $direccion;
            $this->granja = $granja;
        }

        /**
         * Una descripción del animal con su nombre, peso, color, direccion y la granja.
         *
         * @return string
        */
        public function descripcion(): string {
            //LLamo al metodo descricion de Animal
            return parent::descripcion()."Vive en {$this->direccion} y pertenece a la granja {$this->granja}";
            //return "{$this->nombre} tiene {$this->peso} kg y es de color {$this->color}. Vive en {$this->direccion} y pertenece a la granja {$this->granja}.";
        }
    }
