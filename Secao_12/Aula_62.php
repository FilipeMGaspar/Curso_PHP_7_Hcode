<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	//coneção com a base de dados MySql através de PDO
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "admin", "123");

	$stmt = $conect->prepare("DELETE FROM tb_usuarios WHERE idusuario= :ID");

	$id = 2;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Dodos eliminados com sucesso!";
?>