<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	$data = [
		"nome"=>"Hcode"
	];

	define('SECRET', pack('a16','senha'));

	$mycrypt = mcrypt_encrypt(
		MCRYPT_RIJNDAEL_128, 
		SECRET, json_encode($data),
		MCRYPT_MODE_ECB
	);

	var_dump($mycrypt);
?>