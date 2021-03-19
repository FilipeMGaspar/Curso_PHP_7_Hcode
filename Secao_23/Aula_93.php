<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$pasta = "arquivos";

	if(!is_dir($pasta)){
		mkdir($pasta);
	}
?>