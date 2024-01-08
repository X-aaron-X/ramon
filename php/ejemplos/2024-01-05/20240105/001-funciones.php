<?php

// funcion declarada
function ejemplo()
{
    return 1;
}

// funcion declarada con un argumento
function ejemplo1($a)
{
    return $a;
}

// llamar a la funcion 
echo ejemplo();
echo ejemplo(1, 2, 3); // puedes pasar todos los argumentos que quieras

echo ejemplo1("a"); // es obligatorio pasar un argumento
echo ejemplo1("a", "b"); // es obligatorio pasar un argumento pero puedo pasar mas
