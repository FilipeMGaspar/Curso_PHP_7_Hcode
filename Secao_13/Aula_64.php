<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";
	//Aula_64 -> PDO - DAO - Data Access Object

	require_once "config.php";

	/*$sql = new sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/

	/*//Carrega um usuario
	$root = new usuario();
	$root->loadById(7);
	echo $root;
	echo "<br><br>";*/

	/*//Carrega uma lista de usuários
	$lista = usuario::getList();
	echo json_encode($lista);*/

	//carrega uma lista de usuarios buscando pelo login
	$search = usuario::search("a");
	echo json_encode($search);
?>