<?php
	require_once "../../mostraerros.php";

	spl_autoload_register(function($nameClass){
		$dirClass = "Classe";
		$fileName = $dirClass. DIRECTORY_SEPARATOR . $nameClass.".php";
	});

?>