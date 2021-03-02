<?php
	require_once "../../mostraerros.php";

	function incluirClasses($nomeClasse){
		if (file_exists($nomeClasse.".php") == true ) {
			require_once ($nomeClasse.".php");
		}
	}

	spl_autoload_register('incluirClasses');
	
	spl_autoload_register(function($nomeClasse){
		if (file_exists("abestratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
			require_once ("abestratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
		}
	});

	$carro = new DelRay();

	echo "<br><br>";
	$carro->acelerar(110);
	echo "<br>";
	$carro->travar(90);
	echo "<br>";
	$carro->trocarMarcha(5);
	echo "<br><br>";
	$carro->empurrar();
?>