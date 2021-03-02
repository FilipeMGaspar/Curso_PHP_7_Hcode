<?php
	require_once "../../mostraerros.php";

	function incluirClasses($nomeClasse){

		var_dump($nomeClasse);
		/*if(file_exists($nomeClasse."php") === true){
			require_once ($nomeClasse."php");
		}*/

	}

	spl_autoload_register('incluirClasses');
	//spl_autoload_register("incluirClasses");
	
	/*spl_autoload_register($nomeClasse){
		if (file_exists("abestratas" . DIRECTORY_SEPARATOR . $nomeClasse."php") === true) {
			require_once ("abestratas" . DIRECTORY_SEPARATOR . $nomeClasse."php");
		}
	});*/

	//$carro = new DelRay();

	//echo "<br><br>";
	//$carro->acelerar(80);
?>