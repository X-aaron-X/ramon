<?php
    class Trabajan {
        public Humano $persona;
        public Oficio $oficio;

        public function __construct(Humano $persona, Oficio $oficio) {
            $this->persona = $persona;
            $this->oficio = $oficio;
        }
    }