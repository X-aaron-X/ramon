<?php

function crearEtiqueta($contenido, $etiqueta, ...$atributos)
{
    $resultado = "<{$etiqueta} ";
    foreach ($atributos as $atributo) {
        $resultado .= "{$atributo} ";
    }
    $resultado .= ">{$contenido}</{$etiqueta}>";
    return $resultado;
}

function crearEtiqueta1($contenido, $etiqueta, $atributos)
{
    $resultado = "<{$etiqueta} ";
    foreach ($atributos as $atributo) {
        $resultado .= "{$atributo} ";
    }
    $resultado .= ">{$contenido}</{$etiqueta}>";
    return $resultado;
}


echo crearEtiqueta("Hola", "div", "class='caja'", "id='caja1'");
echo crearEtiqueta1("Hola", "div", ["class='caja'", "id='caja1'"]);
