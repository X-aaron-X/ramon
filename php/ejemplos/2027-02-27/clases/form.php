<?php
    namespace clases;

    class DetailView extends Widget {
        public static function ejecutar(array $parametros = [], string $layout = 'componentes/detailview'): string {
            extract($parametros);
            $registro = $query->fetch_assoc();
            $contenido = "";




            ob_start();
            require 'layouts/' . $layout . '.php';
            return ob_get_clean();
        }

        public static function terminar(array $parametros = [], string $layout = 'componentes/detailview'): void {
            // termina el flujo de salida
            // para que no se muestre el HTML
            // en el navegador
            $contenido = ob_get_clean();
            extract($parametros);
            require "layouts/" . $layout . ".php";
        }
    }
