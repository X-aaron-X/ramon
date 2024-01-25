<?php
    class Forma{
        public $nombre;

        public function __construct($nombre=""){
            $this->nombre = $nombre;
        }
    }

    $forma = new Forma();