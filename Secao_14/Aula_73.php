<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	$filename = "usuarios1.csv";

	if(file_exists($filename)){

		$file = fopen($filename, "r");//r leitura

		$headers = explode(",",fgets($file));

		//var_dump($headers);

		$data = array();

		while($row = fgets($file)){ //fgets() retorna false quando não existem mais linhas
			//var_dump(explode(',',$row);

			$rowData = explode(',',$row);

			$linha = array();

			for($i = 0; $i < count($headers); $i++){
				$linha[$headers[$i]] = 
			}

		}

		fclose($file);
		
	}

?>