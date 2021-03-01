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


?>