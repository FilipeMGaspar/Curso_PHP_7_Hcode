<?php
	//constantes
	define('SERVER', '127.0.0.1');

	echo SERVER;

	define('BANCO_DE_DADOS',
	 ['127.0.0.1', 
	 'root',
	 'password',
	 'test']);

	echo "<br>";
	print_r(BANCO_DE_DADOS);

	echo "<br>Não Funcionam";
	echo "<br>";	
	echo PHP_VERSION;

	echo "<br>";
	echo DIRECTORY_SEPARATOR;
?>