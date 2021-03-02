<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

	//namespace Cliente;

	//echo "!!! AKI !!!!";
	class Cadastro extends \Cadastro {

		public function registarVenda($nome){
			echo "Foi feito o registo de uma venda para o cliente ". $this->getNome();
		}
	}

	//$regista = new Cadastro();
	//echo $regista->registarVenda("Teste");
?>