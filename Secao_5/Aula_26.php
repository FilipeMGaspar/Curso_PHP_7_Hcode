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
?>