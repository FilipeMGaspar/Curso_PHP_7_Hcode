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

	/*//carrega uma lista de usuarios buscando pelo login
	$search = usuario::search("ma");
	echo json_encode($search);*/

	/*//Carrega um usuario usando o login e a senha
	$user = new usuario();
	$user->login("tester", "A!1@aM#");
	echo $user;*/

	$aluno = new usuario();

	$aluno->setDeslogim("aluno");
	$aluno->setDessenha("=2aLu&5P(");
?>