<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	 
	if(!is_dir("imagens")){
		mkdir("imagens");
	}

	foreach (scandir("imagem") as $item) {
		if(!in_array($item, array(".", ".."))){
			unlink("imagem/" . $item);
		}
	}
	


?>