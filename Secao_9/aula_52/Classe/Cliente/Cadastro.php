<?php
	namespace Cliente;

	class Cadastro extends \Cadastro {

		public function registarVenda(){
			echo "Foi feito o registo de uma venda para o cliente ". $this->getNome();
		}
	}

?>