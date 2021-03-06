<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

		//coneção com a base de dados MySql através de PDO
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "admin", "123");

	$conect->beginTransaction();

	$stmt = $conect->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");

	$id = 1;

	$stmt->execute(array($id));

	//$conect->rollback();
	$conect->commit();
	
	echo "Dodos eliminados com sucesso!";
?>