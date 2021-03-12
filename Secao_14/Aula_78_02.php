<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	if(isset($_COOKIE["NOME_DO_COOKIE"])){
		var_dump($_COOKIE["NOME_DO_COOKIE"]);
	}
?>