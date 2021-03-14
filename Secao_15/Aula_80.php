<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	function error_handler($code, $message, $file, $line){

		echo json_encode(array(
			"code"=>$code,
			"message"=>$message,
			"line"=>$line,
			"file"=>$file
		));

	}
?>