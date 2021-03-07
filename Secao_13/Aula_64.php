<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";
	//Aula_64 -> PDO - DAO - Data Access Object

	require_once "config.php";

	$sql = new Sql();

	$sql->select("SELECT * FROM tb_usuarios");
?>