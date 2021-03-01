<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

	class Documento {
		private $numero;

		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($num){
			$this->numero = $num;
		}
	}

	class CPF extends Documento {
		public function validar():bool{
			$numeroCPF = $this->getNumero();
			//Validar o CPF
			return true;
		}
	}

	$doc = new CPF();
	$doc->setNumero('112233445566');

	var_dump($doc->validar());
	echo "<br><br>";
	echo $doc->getNumero();
?>