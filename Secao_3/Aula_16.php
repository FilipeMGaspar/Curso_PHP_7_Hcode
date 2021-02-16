<?php
	//escopo global
	$nome = "Glaucio";

	function teste() {
		global $nome; //Direciona para a variavel global
		echo $nome;
	}

	function teste2() {
		$nome = "João"; //Variavel local
		echo $nome . " agora no teste2";
	}

	teste();

	teste2();
?>
