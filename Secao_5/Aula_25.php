<?php
	$frutas = array("Laranja","Abacaxi","Melancia");

	print_r($frutas);

	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[1][0] = "Ford";
	$carros[1][1] = "Fiesta";
	$carros[1][2] = "Fusion";
	$carros[1][3] = "Eco Sport";

	echo "<br>". $carros[0][0]." ".$carros[0][3];

	echo "<br>".end($carros[1]);

	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'João',
		'idade' => 29 
	));

	array_push($pessoas, array(
		'nome' => 'Glaucio',
		'idade' => 25 
	));

	echo "<br>";
	print_r($pessoas);

	echo "<br>";
	echo $pessoas[0]['nome'];
?>