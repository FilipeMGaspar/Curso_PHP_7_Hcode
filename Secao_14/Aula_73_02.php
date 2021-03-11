<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$filename = "logo.png";

	$base64 = base64_encode(file_get_contents($filename));

	$fileInfo = new finfo(FILEINFO_MIME_TYPE);

	$minetype = $fileInfo->file($filename);

	echo "data:image/png;base64,". $base64;

?>