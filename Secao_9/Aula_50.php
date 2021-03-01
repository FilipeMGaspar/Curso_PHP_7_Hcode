<?php
	/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

	//require_once "../mostraerros.php";

	interface Teste{
		public function falar($fala);
	}

	class Testar implements Teste{

	}

	$fala = new Testar();
	//echo $fala;
?>