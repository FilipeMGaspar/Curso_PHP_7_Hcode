<?php
		//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "admin", "123");

	/*$login = "Jose";
	$passaword = "1234567890";
	$id = 2;

	$sql = "UPDATE tb_usuarios SET deslogim=?, desenha=? WHERE idusuario=?";
	$stmt= $conect->prepare($sql);
	$stmt->execute([$login, $passaword, $id]);*/
	
	//update tb_usuarios set deslogim = 'Melga', dessenha='123456789' where idusuario=5;

	$stmt = $conect->prepare("UPDATE tb_usuarios SET deslogim= :LOGIN, dessenha= :PASSWORD WHERE idusuario= :ID");

	$login = "Jose";
	$passaword = "1234567890";
	$id = 5;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $passaword);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();
	
	echo "Dados alterados com sucesso!";

?>