<?php

	require_once "../mostraerros.php";

	abstract class Animal{
		public function Falar(){
			return "Som";
		}

		public function mover(){
			return "Anda";
		}
	}

	class Cachorro extends Animal{
		public function falar(){
			return "Ladra: ão ão ão";
		}
	}

	class Gato extends Animal{
		public function falar(){
			return "Mia: Miau miau miau!";
		}
	}


	$pluto = new Cachorro();
	echo $pluto->falar()."<br>";
	echo $pluto->mover()."<br>";

	$garfield = new Gato();
	echo "<br>";
	echo $garfield->falar()."<br>";
	echo $garfield->mover()."<br>";

	
?>