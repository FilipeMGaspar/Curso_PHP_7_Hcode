<?php
	//Incluir o mostrar erros
	/* Informa o nível dos erros que serão exibidos */
		error_reporting(E_ALL);
 
	/* Habilita a exibição de erros */
		ini_set("display_errors", 1);


	//$conect = new mysqli("localhost", "admin", "123a", "db_php7");
	$conect = new mysqli("localhost", "admin", "123", "db_php7");

	if($conect->connect_error){
		echo "Erro: " . $conect->connect_error;
	}

	$stmt = $conect->prepare("INSERT INTO tb_usuarios (deslogim, dessenha) VALUES(?, ?)");

	$stmt->bind_param("ss", $login, $pass);

	
	$login = "user";
	$pass = "123456";

	$stmt->execute(); 
?>