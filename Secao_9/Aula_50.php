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

	class Passoro extends Animal{
		public function falar(){
			return "Chilgirar: piu piu piu";
		}
		public function mover(){
			return "Voa e " . parent::mover();//Chama o método mover da class Animal
		}
	}

	echo "<hr>";
	echo "..: Cão :.. <br>";
	$pluto = new Cachorro();
	echo $pluto->falar()."<br>";
	echo $pluto->mover()."<br>";

	echo "<hr>";
	echo "**** Gato ****<br>";
	$garfield = new Gato();
	echo $garfield->falar()."<br>";
	echo $garfield->mover()."<br>";

	echo "<hr>";
	echo "~~~ Passaro ~~~<br>";
	$ave = new Passoro();
	echo $ave->falar()."<br>";
	echo $ave->mover()."<br>";
?>