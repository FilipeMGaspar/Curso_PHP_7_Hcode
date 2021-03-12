<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	if(isset($_COOKIE["NOME_DO_COOKIE"])){
		var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));
	}
?>