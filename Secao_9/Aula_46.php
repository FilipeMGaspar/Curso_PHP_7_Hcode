<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


	class Pessoa{
		public $nome = "Rasmus Lerdorf";
		protected $idade = 48;
		private $senha = '123456';

		public function verDados(){
			echo $this->nome . "<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}
	}

	$objecto = new Pessoa();
	//echo $objecto->nome."<br>";
	//echo $objecto->idade. "<br>";
	//echo $objecto->senha."<br>";
	
	$objecto->verDados();
	echo "<br>";
?>