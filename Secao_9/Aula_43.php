<?php
	
	class Carro{		
		private $modelo; //Atributo da class
		private $motor;
		private $ano;

		//get e set do $modelo
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;//$this->modelo referente ao atributo da class $modelo refere á variavel da função
		}

		//get e set do $motor
		public function getMotor(){
			return $this->motor;
		}
		public function setMotor($motor){
			$this->motor = $motor;
		}

		//get e set de $ano
		public function getAno(){
			return $this->ano;
		}
		public function setAno($ano){
			$this->ano = $ano;
		}

	}
?>