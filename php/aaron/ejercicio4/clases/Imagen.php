<?php
    namespace clases;

    class Imagen {
        private string $src;
        private int $border;
        private ?int $ancho;
        private ?int $alto;
        const RUTA = "imagenes/";

        public function __construct(string $src , int $border = 0 , ?int $ancho = null, ?int $alto = null) {
            $this->src = $src;
            $this->border = $border;
            $this->ancho = $ancho;
            $this->alto = $alto;
        }

        public function __toString() {
            return "<img src='" . self::RUTA . $this->src . "' border='" . $this->border . "' width='" . $this->ancho . "' height='" . $this->alto . "'>";
        }

        /**
         * Get the value of src
         *
         * @return string
         */
        public function getSrc(): string
        {
            return $this->src;
        }

        /**
         * Set the value of src
         *
         * @param string $src
         *
         * @return self
         */
        public function setSrc(string $src): self
        {   
            if (!file_exists(self::RUTA . $src)) {
                echo "<h1 style='color:red'>No se encuentra el archivo</h1>";

                die();
            }

            $this->src = $src;

            return $this;
        }

        /**
         * Get the value of border
         *
         * @return bool
         */
        public function getBorder(): int
        {
            return $this->border;
        }

        /**
         * Set the value of border
         *
         * @param bool $border
         *
         * @return self
         */
        public function setBorder(int $border): self
        {
            if (!is_bool($border)) {
                echo "<h1 style='color:red'>El valor de border debe ser booleano</h1>";

                die();
            }

            $this->border = $border;

            return $this;
        }

        /**
         * Get the value of ancho
         *
         * @return ?int
         */
        public function getAncho(): ?int
        {
            return $this->ancho;
        }

        /**
         * Set the value of ancho
         *
         * @param ?int $ancho
         *
         * @return self
         */
        public function setAncho(?int $ancho): self
        {
            $this->ancho = $ancho;

            return $this;
        }

        /**
         * Get the value of alto
         *
         * @return ?int
         */
        public function getAlto(): ?int
        {
            return $this->alto;
        }

        /**
         * Set the value of alto
         *
         * @param ?int $alto
         *
         * @return self
         */
        public function setAlto(?int $alto): self
        {
            $this->alto = $alto;

            return $this;
        }
    }