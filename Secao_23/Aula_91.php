<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	echo "<pre>";

	$comando = system("ls /", $retorno);

	echo "</pre>";
?>