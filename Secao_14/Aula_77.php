<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	//https://viacep.com.br/ws/01310100/json/
	
	$cep = "01310100";

	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1); // 1 = true 

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , 0); // 0 = false 

	$response = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($response, true);

	print_r($data);
?>