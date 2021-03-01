<?php
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

	
?>