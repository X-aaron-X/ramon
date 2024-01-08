<?php
// crear una funcion que reciba
// como primer argumento una etiqueta html
// como segundo argumento un contenido de la etiqueta
// debe devolver una etiqueta html con el contenido
// de la etiqueta


/**
 * Crea una etiqueta HTML con el nombre de etiqueta y contenido dado.
 *
 * @param string $etiqueta El nombre de la etiqueta HTML.
 * @param string $contenido El contenido que se va a envolver dentro de la etiqueta HTML.
 * @return string La etiqueta HTML con el contenido envuelto.
 */

function crearEtiqueta(string $etiqueta, string $contenido): string
{
    return "<{$etiqueta}>{$contenido}</{$etiqueta}>";
}

echo crearEtiqueta("p", "Hola mundo");
