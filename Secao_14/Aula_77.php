<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	//https://viacep.com.br/ws/01310100/json/
	
	$cep = "01310100";

	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);
?>