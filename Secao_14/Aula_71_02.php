<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	require_once "config.php";

	$sql = new sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogim");

	//print_r($usuarios);

	$headers = array();

	foreach ($usuarios[0] as $key => $value) {
		array_push($headers, ucfirst($key));
	}

	print_r($headers);
?>