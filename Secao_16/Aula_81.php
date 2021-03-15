<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	header("Content-Type: image/png");

	$image = imagecreate(256, 256);

	$black = imagecolorallocate($image, 0, 0, 0);
	$red = imagecolorallocate($image, 255, 0, 0);

	

?>