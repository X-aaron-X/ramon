<?php
    namespace clases\personas;

    class Informaticos extends Tecnicos {
        public string $aula;
        public array $ordenadores;

        public function __construct() {
            $this->aula = "";
            $this->ordenadores = [];
        }
    }