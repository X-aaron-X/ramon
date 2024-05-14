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
            $this->src = $src;

            return $this;
        }

        /**
         * Get the value of border
         *
         * @return bool
         */
        public function getBorder(): bool
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
        public function setBorder(bool $border): self
        {
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