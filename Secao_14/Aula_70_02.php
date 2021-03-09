<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	$imgs = scandir('img');

	$data = array();

	foreach ($imgs as $img) {
		if(!in_array($img, array(".", ".."))){//evita o . e o ..
			$filename = 'img' . DIRECTORY_SEPARATOR . $img;

			var_dump($filename);
			echo "<br><br>";

			$info = pathinfo($filename);

			$info["size"] = filesize($filename);

			$info["modifed"] = date("d/m/Y H:i:s", fileatime($filename));
			
			$info['url'] = "http://192.168.0.250/Curso_PHP_7_Hcode/Secao_14/img/" . $filename;

			echo "<br><br>";
			var_dump($info);
			echo "<br><br>";

			//$info['url'] = "http://192.168.0.250/Curso_PHP_7_Hcode/Secao_14/img/" . str_replace("\/\/" , "/", $filename);

			//var_dump($info);

			array_push($data, $info);
		}
	}

	echo json_encode($data);

	//var_dump($imgs);
?>