<?php
		//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "admin", "123");

	$stmt = $conect->prepare("INSERT INTO tb_usuarios (deslogim, dessenha) VALUES (:LOGIN, :PASSWORD)");

	$login = "Jose";
	$passaword = "1234567890";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $passaword);

	$stmt->execute();

	echo "Dados inseridos com sucesso!";
?>