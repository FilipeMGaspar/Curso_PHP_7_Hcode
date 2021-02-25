<?php
	function ola($texto = 'mundo', $periodo = 'Bom dia'){
		return "Olá $texto! $periodo!<br>";
	}

	echo ola();
	echo ola("");
	echo ola("Glaucio");
	echo ola("João");


?>