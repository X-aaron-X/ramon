<?php
    class Persona {
        public $nombre;
        public $apellidos;
        public $direccion;
        public $localidad;
        public $cp;
        
        public function hablar() {
            return "";
        }

        public function direccion() {
            return "Tu direccion es {$this->direccion}, localidad {$this->localidad} y cp {$this->cp} <br>";
        }

        //Metodo que se ejecuta automaticamente cuando la clase es instanciada
        public function __construct() {
            $this->nombre = "";
            $this->apellidos = "";
            $this->direccion = "";
            $this->localidad = "";
            $this->cp = "";
        }
    }