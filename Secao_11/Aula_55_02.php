<?php
	//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//Coneção á base de dados através de Mysqli
	$conect = new mysqli("localhost", "admin", "123", "db_php7");

	//Testa se a conreção á base de dados foi bem sucedida
	if($conect->connect_error){
		echo "Erro: " . $conect->connect_error;
	}

	//
	$conect->query("SELECT * FROM tb_usuarios ORDER BY deslogim");
?>
