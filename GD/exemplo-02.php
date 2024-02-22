<?php

$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

$font = 'arial.ttf'; // Caminho para o arquivo da fonte TrueType

imagettftext($image, 32, 0 ,150, 100, $tileColor, $font, "CERTIFICADO");
imagettftext($image, 32, 0, 350, 200, $tileColor, $font, "Diogo Rodrigues");
imagestring($image, 3, 440, 370, "Concluído em: " . date("Y-m-d"), $tileColor);

header("Content-Type: image/jpeg");
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10);

imagedestroy($image);

?>
    