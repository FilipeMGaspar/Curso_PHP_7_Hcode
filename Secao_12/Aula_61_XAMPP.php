<?php
		//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

	/*$login = "Jose";
	$passaword = "1234567890";
	$id = 2;

	$sql = "UPDATE tb_usuarios SET deslogim=?, desenha=? WHERE idusuario=?";
	$stmt= $conect->prepare($sql);
	$stmt->execute([$login, $passaword, $id]);*/
	
	$stmt = $conect->prepare("UPDATE tb_usuarios SET deslogim = :LOGIN , desenha= :PASSWORD WHERE idusuario = :ID");

	$login = "Jose";
	$passaword = "1234567890";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $passaword);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();
	
	echo "Dados alterados com sucesso!";

?>