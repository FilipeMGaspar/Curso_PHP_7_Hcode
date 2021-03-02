<?php
	require_once "../mostraerros.php";

	
	function __autoload($nomeClass){
		require_once "$nomeClass";
		var_dump($nomeClass);
	}

	$carro = new DelRay();
?>