<?php
//Incluir script que permite mostrar os erros
require_once "../../mostraerros.php";

	//Criação da class usuario
	class Usuario{
		private $idusuario;
		private $deslogim;
		private $dessenha;
		private $dtcadastro;
	}

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function getDeslogim(){
		return $this->deslogim;
	}

	public function getDessenha(){
		return $this->dessenha;
	}
	
	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	//public function
	//public function
	//public function
	//public function
?>