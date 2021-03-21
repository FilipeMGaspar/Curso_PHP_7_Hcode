<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	session_start();

	//Depois de verificar login e senha reinicie o ID da seção
	session_destroy();
	
	session_start();
	session_regenerate_id();

	echo session_id();

?>