<?php

// crear una funcion de php
// que me permita conocer el numero de veces que el primer argumento
// se repite en el segundo que es un array

// repite(2,[4,5,2,2,3,2]) ==>3 
// repite(5,[4,5,2,2,3,2]) ==>1
// repite('a',['a','b','c','d','a']) ==>2

/**
 * Calcula la cantidad de veces que un valor dado aparece en un array.
 *
 * @param mixed $valor El valor a buscar en el arreglo.
 * @param array $vector El arreglo en el que buscar el valor.
 * @return int La cantidad de veces que el valor aparece en el arreglo.
 */
function repite(mixed $valor, array $vector): int
{
    // inicializo el acumulador de repeticiones
    $repeticiones = 0;

    //recorro el vector
    // foreach
    // for
    // while

    // realizo el bucle con el foreach
    foreach ($vector as $elemento) {
        if ($elemento == $valor) {
            $repeticiones++;
        }
    }

    return $repeticiones;
}

// crear una funcion que me permite conocer el numero de vocales
// que hay en un array de caracteres
// observaciones 
// las vocales son las letras a, e, i, o, u
// los caracteres del array en minusculas y sin tildes

// contarVocales(['h','o','l','a']) ==> 2
// contarVocales(['o','o','j','a']) ==> 3
/**
 * Cuenta el número de vocales en un arreglo de caracteres.
 *
 * @param array $vector El arreglo de caracteres.
 * @return int El número de vocales en el arreglo.
 */
function contarVocales(array $vector): int
{
    // inicializo el acumulador de vocales
    $vocales = 0;

    // recorro el vector
    foreach ($vector as $caracter) {
        // si el caracter es vocal
        switch ($caracter) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                $vocales++;
                break;
        }
    }

    // devuelvo el acumulador
    return $vocales;
}

/**
 * Cuenta el número de vocales en un arreglo de caracteres.
 *
 * @param array $vector El arreglo de caracteres.
 * @return int El número de vocales en el arreglo.
 */
function contarVocales1(array $vector): int
{
    // inicializo el acumulador de vocales
    $vocales = 0;

    // creo un array con las vocales
    $vectorVocales = ['a', 'e', 'i', 'o', 'u'];
    // recorro el vector
    foreach ($vector as $caracter) {
        // si el caracter es vocal
        if (in_array($caracter, $vectorVocales)) {
            $vocales++;
        }
    }

    // devuelvo el acumulador
    return $vocales;
}
