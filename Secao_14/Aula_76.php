<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$dir1 = "folder01";
	$dir2 = "folder02";

	if(!is_dir($dir1)){
		mkdir($dir1);
	}

	if(!is_dir($dir2)){
		mkdir($dir2);
	}

	
?>