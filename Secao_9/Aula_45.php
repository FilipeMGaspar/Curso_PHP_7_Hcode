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

		public function __toString(){
			return $this->logradouro.", Nº".$this->numero." - ".$this->cidade;
		}
	}

	$meuEndereco = new Endereco("Rua dos Tontos.", "123", "Seus Tontinhos");

	var_dump($meuEndereco);

	echo "<br><br>".$meuEndereco;

	echo "<br><br>";
	unset($meuEndereco);
?>