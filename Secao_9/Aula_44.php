<?php
	class Documento {
		private $numero;

		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero; 
		}

		//Função para validar o CPF
		public static function validar($cpf){
			//Verifica se o CPF foi informado
			if(empty($cpf)){
				return false;
			}

			// Elimina possivel mascara
			$cpf = preg_replace('[^0-9]', '', $cpf);
			$cpf = str_pad($cpf, 11,'0', STR_PAD_LEFT);
		}
	}


	$cpf = new Documento();
	$cpf->setNumero("32165498712");

	var_dump($cpf->getNumero());
?>