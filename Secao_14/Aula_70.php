<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	$name = "images";

	//verifica se a pasta existe
	if(!is_dir($name)){
		mkdir($name);
	}
?>