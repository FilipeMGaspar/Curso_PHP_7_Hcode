<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);

	$gray = imagecolorallocate($image, 100, 100, 100);
?>