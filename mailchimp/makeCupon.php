<?php

header( "Content-type: image/png" );

if ($_GET['name'] && $_GET['name'] != "*|NAME|*" && $_GET['email'] && $_GET['email'] != "*|EMAIL|*") {

$png_image = imagecreatefrompng('cupon.png');

$black = imagecolorallocate($png_image, 0, 0, 0);

$font_path = 'ARIAL.TTF';

$text = $_GET['name'] . "\n" . $_GET['email'];

imagettftext($png_image, 14, 0, 190, 87, $black, $font_path, $text);

imagepng($png_image);

imagedestroy($png_image);

} else {
// Create a 100*30 image
$im = imagecreate(300, 100);

// White background and blue text
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, 300, 100, $white);

$font = 'ARIAL.TTF';

// Write the string at the top left
imagettftext($im, 14, 0, 20, 50, $black, $font, 'Błędny lub brak adresu e-mail');

imagepng($im);
imagedestroy($im);
}
