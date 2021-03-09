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

	fwrite($file, implode(", ", $headers) . "\r\n");

	foreach ($usuarios as $row) {//nas linhas
		$data = array();
		
		foreach ($row as $key => $value) {//nas colunas
			array_push($data, $value);
		}

		fwrite($file, implode(", ", $data). "\r\n");//linha
	}
	
	fclose($file);

	echo "Exportação efectuada com SUCESSO!";
	//print_r($headers);
	//echo implode(", ", $headers);
?>