<?php
    class Perro{
        public $nombre;

        public function ladrar(){
            return "guau guau";
        }

        //Metodo constructor es recomentable utilizarle para inicializar el objeto
        public function __construct($nombre = ""){
            $this->nombre = $nombre;
        }
    }