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

	abstract class Automovel implements Veiculo {
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

	class DelRay extends Automovel {
		public function empurrar(){
			echo "Está a empurrar muito DEVAGAR!!!";
		}
	}

	$carro = new DelRay();
	//$carro = new Automovel();
	echo $carro->acelerar(200);
	echo "<br><br>";
	echo $carro->empurrar();
?>