<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	if(isset($_POST["busca"])){
		echo $_POST["busca"];
	}
?>