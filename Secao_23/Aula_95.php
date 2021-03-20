<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	$_POST["busca"] = '<a href="#"><strong>OLA!</strong></a><script>alert("Estás tramado!")</script>';
	
	if(isset($_POST["busca"])){
		//echo $_POST["busca"];
		echo strip_tags($_POST["busca"], "<strong><a>");
	}
?>