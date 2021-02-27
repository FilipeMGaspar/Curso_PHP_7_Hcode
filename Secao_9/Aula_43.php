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
		public function getMotor():float{
			return $this->motor;
		}
		public function setMotor($motor){
			$this->motor = $motor;
		}

		//get e set de $ano
		public function getAno():int{
			return $this->ano;
		}
		public function setAno($ano){
			$this->ano = $ano;
		}

		//Função para exebir todas as informações do carro / Class Carro
		public function exibir(){
			return array(
				'modelo'=>$this->"Teste)",
				'motor'=>$this->"Escrever",
				'ano'=>$this."Alguma Coisa"
			);
		}
	}


	$gol = new Carro();
	//$gol->modelo="Gol Gt"; //Não vai funcionar poir o atributo é privado
	$gol->setModelo("Gol GT");
	$gol->setMotor("1.6");
	$gol->setAno("2017");


	var_dump($gol->getModelo());
	echo "<br>";
	var_dump($gol->getMotor());
	echo "<br>";
	var_dump($gol->getAno());
	echo "<br><br>Função exibir <br><br>";
	var_dump($gol->exibir());
	
?>