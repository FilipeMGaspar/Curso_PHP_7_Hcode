<?php
	require_once "../../mostraerros.php";

	spl_autoload_register(function($nameClass) {
		$dirClass = "Classe";
		$fileName = $dirClass. DIRECTORY_SEPARATOR . $nameClass .".php";

		echo $fileName."<br>";
		if(file_exists($fileName)) {
			require_once "$fileName";
		}
	});

?>