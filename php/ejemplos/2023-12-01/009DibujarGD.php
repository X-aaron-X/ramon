<?php
header("Content-type: image/png");

$lado = $_GET["lado"];
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
//imagerectangle($imagen, 100, 100, $lado, $lado, $rojo);
imagefilledrectangle($imagen, 100, 100, $lado, $lado, $color1);

imagepng($imagen);
