<?php
	
	class Pessoa{
		public $nome;//Atributo

		public function falar(){//Método
			return "O meu nome é: ".$this->nome;//$this    é a representação do próprio objecto já instanciado
		}
	}

	$glaucio = new Pessoa();

	$glaucio->nome ="Glaucio Daniel";
	echo $glaucio->falar();

?>