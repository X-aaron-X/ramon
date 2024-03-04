<?php
    namespace clases;

    class Header extends Widget {

        public static function ejecutar(array $parametros = [], string $layout = "componentes/jumbotron"): string {
            return parent::ejecutar($parametros, $layout);
        }
        
        public static function terminar(array $parametros = [], string $layout = 'componentes/jumbotron'): void {
            parent::terminar($parametros, $layout);

            extract($parametros);
        }

    }