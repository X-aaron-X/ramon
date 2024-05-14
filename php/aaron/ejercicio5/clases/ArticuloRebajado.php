<?php
    namespace clases;

    class ArticuloRebajado extends Articulo{
        private int $rebaja;

        public function __construct($pNombre = null, $pPrecio = 0, $pRebaja = 0){
            parent::__construct($pNombre, $pPrecio);

            $this->rebaja = $pRebaja;
        }

        public function calculaDescuento(){
            return $this->getPrecio() * $this->rebaja / 100;
        }

        public function precioRebajado(){
            return $this->getPrecio() - $this->calculaDescuento();
        }

        public function __toString(){
            return parent::__toString() . "La rebaja es {$this->rebaja}% y el descuento es {$this->calculaDescuento()}€";
        }
    }
