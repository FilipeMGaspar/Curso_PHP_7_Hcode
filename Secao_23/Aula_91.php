<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	echo "<pre>";

	$comando = system("ls /var/www/html", $retorno);
	//$comando = system("dir C:", $retorno);

	echo "</pre>";
?>