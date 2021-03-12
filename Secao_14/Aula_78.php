<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$data = array(
		"empresa"=>"Hcode Treinamentos"
	);

	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "Ok!";
?>