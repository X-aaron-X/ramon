<?php

use clases\ejercicio2\Producto;
use clases\ejercicio2\Usuario;

require_once "autoload.php";


$usuario1 = new Usuario(1, "Juan", "juan@alpe.es", 45, false);

echo $usuario1;


$producto1 = new Producto(1, "Manzanas", "frutas", 1.5, 100);

echo $producto1;

$producto1->calcularPrecioDescuento(0.15);

echo $producto1;
