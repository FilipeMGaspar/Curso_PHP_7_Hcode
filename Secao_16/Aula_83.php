<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);

	$gray = imagecolorallocate($image, 100, 100, 100);

	imagettftext($image, 32, 0, 450, 150,  $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Bevan". DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");

	imagettftext($image, 28, 440, 350, "Divanei Aparecida", $titleColor);

	imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

	header("Content-type: image/jpeg");

	imagejpeg($image, "certificado-".date("d-m-Y").".jpg", 10);

	imagedestroy($image);
?>