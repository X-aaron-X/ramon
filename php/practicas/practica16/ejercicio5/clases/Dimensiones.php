<?php
    namespace clases;

    class Dimensiones {
        private float $alto;
        private float $ancho;
        private float $profundidad;

        /**
         * Get the value of alto
         *
         * @return float
        */
        public function getAlto(): float {
            return $this->alto;
        }

        /**
         * Set the value of alto
         *
         * @param float $alto
         *
         * @return self
        */
        public function setAlto(float $alto): self {
            $this->alto = $alto;

            return $this;
        }

        /**
         * Get the value of ancho
         *
         * @return float
        */
        public function getAncho(): float {
            return $this->ancho;
        }

        /**
         * Set the value of ancho
         *
         * @param float $ancho
         *
         * @return self
        */
        public function setAncho(float $ancho): self {
            $this->ancho = $ancho;

            return $this;
        }

        /**
         * Get the value of profundidad
         *
         * @return float
        */
        public function getProfundidad(): float {
            return $this->profundidad;
        }

        /**
         * Set the value of profundidad
         *
         * @param float $profundidad
         *
         * @return self
        */
        public function setProfundidad(float $profundidad): self {
            $this->profundidad = $profundidad;

            return $this;
        }

        public function __construct(float $alto = 0, float $ancho = 0, float $profundidad = 0) {
            $this->setAlto($alto);
            $this->setAncho($ancho);
            $this->setProfundidad($profundidad);
        }

        public function getVolumen(): float {
            return $this->getAlto() * $this->getAncho() * $this->getProfundidad();
        }
    }