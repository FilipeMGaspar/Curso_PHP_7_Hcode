<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";
	//Aula_64 -> PDO - DAO - Data Access Object

	spl_autoload_register(function($class_name){

		$filename = $class_name.".php";

		if(file_exists($filename)){
			require_once($filename);
		}
	});
?>