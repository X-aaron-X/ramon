<?php
    namespace clases\herencia;

    class Persona {
        public string $nombre;
        public string $direccion;
        public string $telefono;

        public function __construct(string $nombre = "", string $direccion = "", string $telefono = "") {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
        }
    }
