<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);

	$gray = imagecolorallocate($image, 100, 100, 100);

	imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);

	imagestring($image, 5, 440, 350, "Divanei Aparecida", $titleColor);

	imagestring($image, 3, 440, 370, "concluido em: ".date("d/m/Y"), $titleColor);
?>