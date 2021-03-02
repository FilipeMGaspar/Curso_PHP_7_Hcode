<?php
	require_once "../mostraerros.php";

	
	function __autoload($nomeClass){
		require_once "$nomeClass.php";
		var_dump($nomeClass);
	}

	$carro = new DelRay();

	echo "<br><br>";
	$carro->acelerar(80);

?>