<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	//header("Content-type: image/jpeg");

	$file = "wallpaper.jpg";

	$new_width = 256;
	$new_height = 256;

	//var_dump(getimagesize($file));
	getimagesize($file);

?>