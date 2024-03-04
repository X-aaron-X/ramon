<?php

namespace clases;

class DetailView extends Widget {
    public static function ejecutar(array $parametros = [], string $layout = 'componentes/detailview'): string {
        extract($parametros);
        $registro = $query->fetch_assoc();
        $contenido = "";
        // pregunto si tengo variable campos
        if (isset($campos)) {
            // muestro solo los campos que me piden
            foreach ($campos as $campo) {
                $contenido .= '<li class="list-group-item">' . "{$campo}: {$registro[$campo]}" . '</li>';
            }
        } else {
            // muestro todos los campos
            foreach ($registro as $campo => $valor) {
                $contenido .= '<li class="list-group-item">' . "{$campo}: {$valor}" . '</li>';
            }
        }

        // preguntar si me pasas la variable titulo
        if (isset($campoTitulo)) {
            $titulo = $registro[$campoTitulo];
        } else {
            $titulo = $registro["id"];
        }
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
