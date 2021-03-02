<?php
	require_once "../../mostraerros.php";

	function incluirClasses($nomeClasse){
		if(file_exists($nomeClasse."php")){
			require_once ($nomeClasse."php");
		}
	}

	spl_autoload_register("incluirClasses"){

	}
	/*function __autoload($nomeClass){
		require_once "$nomeClass.php";
		var_dump($nomeClass);
	}*/

	$carro = new DelRay();

	echo "<br><br>";
	$carro->acelerar(80);
?>