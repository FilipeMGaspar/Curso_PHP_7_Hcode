<?php
	
	class Carro{		
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
	}
?>