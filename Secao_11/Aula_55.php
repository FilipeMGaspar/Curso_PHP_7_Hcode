<?php
	$conect = new mysqli("localhost", "admin", "Tief2020!", "db_php7");

	if($conect->connect_error){
		echo "Erro: " . $conect->connect_error;
	}
?>