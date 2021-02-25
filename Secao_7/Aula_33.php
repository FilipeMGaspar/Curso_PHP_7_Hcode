<?php
	function ola($texto = 'mundo', $periodo = 'Bom dia'){
		return "Olá $texto! $periodo!<br>";
	}

	
	function teste(){
		$argumentos = func_get_args();
		return $argumentos;
	}
	
	
	echo ola();
	echo ola("", "Boa noite");
	echo ola("Glaucio", "Boa tarde");
	echo ola("João", "");


	echo "<br><br>";
	var_dump(teste("aaaaaa"));
	echo "<br><br>";
	var_dump(teste(123));
	
?>