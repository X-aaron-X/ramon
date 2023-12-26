<?php
    header("Content-type: image/png");

    //radio del circulo
    $radio = mt_rand(10, 100);

    //Dos variables que definen el ancho y alto del lienzo de dibujo
    $width = 200;
    $height = 200;
    // creo lienzo dibujo
    $imagen = imagecreatetruecolor($width, $height);
    // coloco color fondo
    $colorFondo = imagecolorallocatealpha($imagen, 177, 177, 177, 50);
    // relleno el lienzo con el color de fondo
    imagefill($imagen, 0, 0, $colorFondo);
    // creo colores
    $negro = imagecolorallocate($imagen, 0, 0, 0);
    $rojo = imagecolorallocate($imagen, 255, 0, 0);
    $verde = imagecolorallocate($imagen, 0, 255, 0);
    $color1 = imagecolorallocatealpha($imagen, 0xC, 0xC, 0xC, 100);

    //dibujo un circulo 
    imageline($imagen, 100, 50, 150, 150, $rojo);
    imageline($imagen, 100, 50, 50, 150, $rojo);
    imageline($imagen, 50, 150, 150, 150, $rojo);

    imagepng($imagen);