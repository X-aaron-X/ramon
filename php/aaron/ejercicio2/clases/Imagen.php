<?php
    namespace clases;

    class Imagen {
        private string $src;
        private bool $border;
        private ?int $ancho;
        private ?int $alto;
        const RUTA = "imagenes/";

        public function __construct(string $src , bool $border = false , ?int $ancho = null, ?int $alto = null) {
            $this->src = $src;
            $this->border = $border;
            $this->ancho = $ancho;
            $this->alto = $alto;
        }

        public function __toString() {
            return "<img src='" . self::RUTA . $this->src . "' border='" . $this->border . "' width='" . $this->ancho . "' height='" . $this->alto . "'>";
        }
    }