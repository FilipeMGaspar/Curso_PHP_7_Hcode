<?php
	//Incluir script que permite mostrar os erros
	require_once "../mostraerros.php";

	$name = "images";

	//verifica se a pasta existe
	if(!is_dir($name)){// Se não existe
		mkdir($name);
		echo "Pasta $name criada com sucesso!";
	}else{
		rmdir($name);
		echo "A pasta $name já existe! Removi o mesmo";
	}
?>