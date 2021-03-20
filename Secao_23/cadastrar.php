<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$email = $_POST["inputEmail"];

	var_dump($_POST);

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	//6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe
?>

