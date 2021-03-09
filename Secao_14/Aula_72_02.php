<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	 
	if(!is_dir("imagens")){
		mkdir("imagens");
		$file = fopen("imagens/a.txt", "w+");
		fwrite($file, "a.txt" . "\r\n");
		fclose($file);
		
		$file = fopen("log01.txt", "w+");
		fwrite($file, date("d/m/Y H:i:s") . "\r\n");
		fclose($file);

		echo "Ficheiros Criados com sucesso! <br>";
		
	}else {
		rmdir("imagens");
	}
/*
	foreach (scandir("imagem") as $item) {
		if(!in_array($item, array(".", ".."))){
			unlink("imagem/" . $item);
		}
	}
	
	echo "Ficheiros REMOVIDOS com sucesso!";
*/
?>