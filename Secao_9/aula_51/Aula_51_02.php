<?php
	require_once "../../mostraerros.php";

	function incluirClasses($nomeClasse){
		require_once ($nomeClasse."");
	}

	spl_autoload_register(""){

	}
	/*function __autoload($nomeClass){
		require_once "$nomeClass.php";
		var_dump($nomeClass);
	}*/

	$carro = new DelRay();

	echo "<br><br>";
	$carro->acelerar(80);
?>