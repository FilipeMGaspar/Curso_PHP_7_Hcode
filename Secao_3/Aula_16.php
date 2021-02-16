<?php
	//escopo global
	$nome = "Glaucio";

	function teste() {
		global $nome;
		echo $nome;
	}

	function teste2() {
		echo $nome
	}

	teste();

	//echo "$Sobrenome";
?>
