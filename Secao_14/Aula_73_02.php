<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$filename = "logo.png";

	$base64 = base64_encode(file_get_contents($filename));

	$fileInfo = new finfo(FILEINFO_MIME_TYPE);

	$minetype = $fileInfo->file($filename);

	//echo "data:image/png;base64,". $base64; //Modo estático

	$base64encode = "data:" . $minetype . ";base64,". $base64;

	echo "<br>";

	echo "<a>" . "Link Para Imagem" . "</a>";
	/*<a href="<?=base64encode?>" target = "_blank"> Link Para IMAGEM !</a>
	<img src="<?=base64encode?>">*/
?>


