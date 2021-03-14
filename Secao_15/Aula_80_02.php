<?php
//Incluir script que permite mostrar os erros
//require_once "../mostraerros.php";

	error_reporting(E_ALL & ~E_NOTICE);
	
	$nome = $_GET["nome"];

	echo $nome;
?>