<?php
    namespace Clases;

    class Widget {
        public static function comenzar(): void {
            // Controla el flujo de salida para que no se muestre el HTML en el navegador
            ob_start();
        }

        public static function ejecutar(array $parametros = [], string $layout = "layout1"): string {
            extract($parametros);

            ob_start();

            require "layouts/{$layout}.php";

            return ob_get_clean();
        }

        /**
         * El metodo mostrara la pagina un determinado layout
         *
         * @param array $parametros 
         * @param string $layout el nombre del layout a utilizar
         * @throws void 
        */
        public static function terminar(array $parametros = [], string $layout = "layout1"): void {
            // Termina el flujo de salida para que no se muestre el HTML en el navegador
            $contenido = ob_get_clean();

            extract($parametros);

            require "layouts/{$layout}.php";
        }
    }