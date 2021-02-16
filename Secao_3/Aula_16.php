<?php
	//escopo global
	$nome = "Glaucio";//Variavel global

	function teste() {
		global $nome; //Direciona para a variavel global
		echo $nome . " na função teste";
	}

	function teste2() {
		$nome = "João"; //Variavel local
		echo $nome . " agora na função teste2";
	}

	teste();
	echo "<br><br>";
	teste2();
?>
