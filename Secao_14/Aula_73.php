<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	$filename = "usuarios1.csv";

	if(file_exists($filename)){

		$file = fopen($filename, "r");//r leitura

		$headers = explode(",",fgets($file));

		//var_dump($headers);

		while($row = fgets($file)){ //fgets() retorna false quando não existem mais linhas
			var_dump($row);

		}

		fclose($file);
		
	}

?>