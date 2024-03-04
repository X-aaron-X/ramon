<?php
    namespace Clases;

    class Pagina extends Widget {

        public static function terminar(array $parametros = [], string $layout = 'paginas/layout1'): void {
            parent::terminar($parametros, $layout);
        }
    }