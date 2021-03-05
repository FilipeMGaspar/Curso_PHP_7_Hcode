<?php
	//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo ao Microsoft SQLSERVER 
	$conect = new PDO("sqlsrv:Database=db_php7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "123456");

	

?>