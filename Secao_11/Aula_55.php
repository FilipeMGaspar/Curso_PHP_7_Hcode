<?php
	$conect = new mysqli("localhost", "admin", "123", "db_php7");
	//$conect = new mysqli("localhost", "admin", "123a", "db_php7");


	if($conect->connect_error){
		echo "Erro: " . $conect->connect_error;
	}

	$stmt = $conect->prepare("insert into tb_usuarios (deslogin, dessenha) values(?, ?)");

	/*$stmt->bind_param("ss", $login, $pass);

	$login = "user";
	$pass = "123456";

	$stmt->executar(); */
?>