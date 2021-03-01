<?php


	require_once "../mostraerros.php";

	interface Teste{
		public function falar($fala);
	}

	class Testar implements Teste{
		public function falar($fala){
			echo $fala;
		}
	}

	$fala = new Testar();
	echo $fala->falar("Estou a falar! <h2>Estejam atentos!</h2>");
?>