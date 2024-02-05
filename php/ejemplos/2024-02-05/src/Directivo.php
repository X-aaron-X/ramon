<?php
    namespace src;

    class Directivo extends Empleado {
        private $categoria;

        public function __toString(): string {
            $texto = parent::__toString();

            $texto .= "Categoría: " . $this->getCategoria();

            return $texto;
        }

        /**
         * Get the value of categoria
        */
        public function getCategoria(){
            return $this->categoria;
        }

        /**
         * Set the value of categoria
        */
        public function setCategoria($categoria): self{
            $this->categoria = $categoria;

            return $this;
        }
    }
