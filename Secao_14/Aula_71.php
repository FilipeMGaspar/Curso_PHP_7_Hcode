<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	//$file = fopen("log.txt", "w+");//caminho do arquivo, modo de abertura leitura, escrita "w+ cria o ficheiro se não existir"

	$file = fopen("log01.txt", "a+");

	fwrite($file, date("d/m/Y H:i:s") . "\r\n");

	fclose($file);

	echo "Arquivo criado com sucesso!";
?>