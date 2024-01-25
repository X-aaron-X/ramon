<?php
    class Persona {
        //Definimos los miembros de mi clase

        //Atributos clase
        public $nombre = "";
        public $apellidos = "";
        public $edad = 0;

        //Metodos de la clase
        public function hablar() {
            //Mediantes la palabra reservada $this podemos acceder a los miembros de la clase solamente dentro de la clase
            return "<br> Soy {$this->nombre} {$this->apellidos} y tengo {$this->edad} anios";
        }
    }