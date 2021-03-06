<?php
		//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "admin", "123");

	$stmt = $conect->prepare("UPDATE tb_usuarios SET deslogim = :LOGIN , desenha= :PASSWORD WHERE idusuario = :ID");

	

?>