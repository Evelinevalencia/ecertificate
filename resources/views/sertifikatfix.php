<?php
header('Content-Disposition: attachment;filename="Coba Sertifikat.jpg"');
header('content-type:image/jpeg');
$font = realpath('ARLRDBD.TTF');
$image = imagecreatefromjpeg("sertifikat.jpeg");
$color = imagecolorallocate($image,19,21,22);
$name = "Nico Abel Laia";
imagettftext($image,40,0,900,900,$color,$font,$name);
imagejpeg($image);
imagedestroy($image);
?>