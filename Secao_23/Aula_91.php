<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	if($_SERVER["REQUEST_METHOD"] === 'POST'){
		$cmd = $_POST["cmd"];

		echo "<pre>";

		$comando = system("ls /", $retorno);
		//$comando = system("dir C:", $retorno);

		echo "</pre>";
	}


?>

<form method="post">
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>