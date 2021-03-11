<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">

	<button type="submit">Enviar</button>
</form>

<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		
		$file = $_FILES["fileUpload"];

		if($file["error"]){
			throw new Exception("Erro: ". $file["error"]);
		}
	}

?>