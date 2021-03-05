<?php
	//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo ao Microsoft SQLSERVER 
	
	$conect = new PDO("sqlsrv:Server=localhost\SQLEXPRESS;Database=db_php7", "sa", "123456");

	$stmt = $conect->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);

?>