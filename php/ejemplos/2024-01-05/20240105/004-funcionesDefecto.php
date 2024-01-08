<?php

/**
 * Crea una etiqueta HTML con el contenido y el nombre de etiqueta opcionales.
 *
 * @param string $contenido El contenido de la etiqueta.
 * @param string $etiqueta El nombre de la etiqueta (por defecto es "div").
 * @return string La etiqueta HTML con el contenido.
 */
function crearEtiqueta($contenido, $etiqueta = "div")
{
    return "<{$etiqueta}>{$contenido}</{$etiqueta}>";
}

echo crearEtiqueta("Hola mundo"); // <div>Hola mundo</div>

echo crearEtiqueta("Hola mundo", "p"); // <p>Hola mundo</p>

// echo crearEtiqueta(); // me da error porque el primer argumento no es opcional
