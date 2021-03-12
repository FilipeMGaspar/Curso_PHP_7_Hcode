<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	$link = "https://www.google.pt/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

	$content = file_get_contents($link);
	//var_dump($content);

	$parse = parse_url($link);
	var_dump(basename($parse["path"]));
?>