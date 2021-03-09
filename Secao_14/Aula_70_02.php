<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	$imgs = scandir('img');

	foreach ($imgs as $img) {
		if(!in_array($img, array(".", ".."))){//evita o . e o ..
			$filename = 'img' . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

			var_dump($info);
		}
	}
	
	//var_dump($imgs);

?>