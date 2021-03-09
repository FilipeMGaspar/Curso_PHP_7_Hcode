<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	$file = fopen("log.txt", "w+");//caminho do arquivo, modo de abertura leitura, escrita

	fwrite($file, date("d/m/Y H:i:s"));

	fclose($file);

	echo "Arquivo criado com sucesso!";
?>