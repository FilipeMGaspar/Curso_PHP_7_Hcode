<?php
	//$conect = new mysqli("localhost", "admin", "123", "db_php7");
	$conect = new mysqli("localhost1", "admin", "123", "db_php7");


	if($conect->connect_error){
		echo "Erro: " . $conect->connect_error;
	}
?>