<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	if(isset($_COOKIES["NOME_DO_COOKIE"])){
		var_dump($_COOKIES["NOME_DO_COOKIE"]);
	}
?>