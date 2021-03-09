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

	$file = fopen("usuarios.csv", "w+");

	fwrite($file, implode(", ", $headers));

	foreach ($usuarios as $key => $value) {
		
	}

	fclose($file);
	//print_r($headers);
	//echo implode(", ", $headers);
?>