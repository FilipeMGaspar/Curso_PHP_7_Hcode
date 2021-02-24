<?php
	
	$pessoas = array();

	array_push($pessoas ,array(
		'nome' => 'João',
		'idade' => 29
	));

	array_push($pessoas ,array(
		'nome' => 'Glaucio',
		'idade' => 25
	));

	echo "<br> json_encode<br>";
	echo json_encode($pessoas);
	echo "<br>";
	$json = '[{"nome":"Jo\u00e3o","idade":29},{"nome":"Glaucio","idade":25}]';

	$data = json_decode($json, true);
	echo "<br>";
	var_dump($data);
	
?>