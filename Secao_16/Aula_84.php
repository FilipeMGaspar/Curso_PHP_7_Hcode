<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	header("Content-type: image/jpeg");

	$file = "wallpaper.jpg";

	$new_width = 256;
	$new_height = 256;

	//var_dump(getimagesize($file));
	$data = getimagesize($file);

	/*
	$width = $data[0];
	$height = $data[1];
	*/

	list($old_width, $old_height) = getimagesize($file);

	$new_image = imagecreatetruecolor($new_width, $new_height);

?>