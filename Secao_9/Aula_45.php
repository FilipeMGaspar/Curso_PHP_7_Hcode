<?php
	class Endereco {
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b, $c){
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){
			var_dump("Destruir");
		}
	}

	$meuEndereco = new Endereco("Rua dos Tontos", "123", "Tolinhos");

	var_dump($meuEndereco);

	unset($meuEndereco);
?>