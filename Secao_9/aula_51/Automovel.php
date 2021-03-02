<?php
	interface Veiculo {
		public function acelerar($velocidade);
		public function travar($velocidade);
		public function trocarMarcha($marcha);
	}

	abstract class Automovel implements Veiculo {
		
		public function acelerar($velocidade){
			echo "O veiculo acelerou até aos " . $velocidade . " km/h";
		}

		public function travar($velocidade){
			echo "O veiculo trabou até aos " . $velocidade . " Km/h";
		}	

		public function trocarMarcha($trocarMarcha){
			echo "O veiculo engatou a " . $trocarMarcha . " ";
		}

	}
?>