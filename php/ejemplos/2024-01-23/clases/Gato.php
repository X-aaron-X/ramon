<?php
    class Gato {
        public $nombre;
        public $color;
        public $pelo;
        public $peso;

        public function __construct($nombre='',$color='Negro',$pelo='Si',$peso='5') {
            $this->nombre = $nombre;
            $this->color = $color;
            $this->pelo = $pelo;
            $this->peso = $peso;
        }


    }