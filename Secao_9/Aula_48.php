<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

	interface Veiculo {

		public function acelerar($velocidade);
		public function travar($velocidade);
		public function TrocarMarcha($marcha);
	}

	class Civic implements Veiculo {

	}

	$carro = new Civic();
?>