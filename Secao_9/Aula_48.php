<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

	interface Veiculo {

		public function acelerar($velocidade);
		public function travar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo {
		public function acelerar($velocidade){
			echo "O Veiculo acelerou até: ".$velocidade." Km/h";
		}
		public function travar($velocidade){
			echo "O veículo travou até: " . $velocidade." Km/h";
		}

		public function trocarMarcha($marcha){
			echo "O Veiculo engatou a marcha: ".$marcha;
		}
	}

	$carro = new Civic();
	$carro->trocarMarcha(1);
?>