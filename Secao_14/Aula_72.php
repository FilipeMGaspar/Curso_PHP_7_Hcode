<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	 
	$file = fopen("teste.txt", "w+");

	fclose($file);

	//unlink("teste.txt");

	echo "Ficheiro removido Com Sucesso!";
?>