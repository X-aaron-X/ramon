<?php
header("Content-type: image/png");

$radio = $_GET["radio"];
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
imageellipse($imagen, 100, 100, $radio, $radio, $rojo);
imagefilledellipse($imagen, 100, 100, $radio, $radio, $color1);

imagepng($imagen);
