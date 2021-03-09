<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	$imgs = scandir('img');

	$data = array();

	foreach ($imgs as $img) {
		if(!in_array($img, array(".", ".."))){//evita o . e o ..
			$filename = 'img' . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

			$info["size"] = filesize($filename);

			$info["modifed"] = data("d/m/Y H:i:s", fileatime($filename));

			//var_dump($info);

			array_push($data, $info);
		}
	}

	echo json_encode($data);

	//var_dump($imgs);
?>