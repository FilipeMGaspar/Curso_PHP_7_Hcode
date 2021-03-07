<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	//Criação da class usuario
	class Usuario{
		private $idusuario;
		private $deslogim;
		private $dessenha;
		private $dtcadastro;
	

	
		public function getIdusuario(){
			return $this->idusuario;
		}
		public function setIdusuario($IdUser){
			$this->idusuario = $IdUser;
		}


		public function getDeslogim(){
			return $this->deslogim;
		}
		public function setDeslogim($login){
			$this->deslogim = $login;
		}

	
		public function getDessenha(){
			return $this->dessenha;
		}
		public function setDessenha($senha){
			$this->dessenha = $senha;
		}
	
	
		public function getDtcadastro(){
			return $this->dtcadastro;
		}	
		public function setDtcadastro($DtCadastro){
			$this->dtcadastro = $DtCadastro;
		}

		public function loadById($id){
			$sql = new sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario= :ID", array(
				":ID"=>$id
			));

			if(count($results) > 0) {
				$row = results[0];

				$this->setIdusuario($row['idusuario']);
				$this->setDeslogim($row['deslogim']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime(($row['dtcadastro'])));
			}
		}

		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogim"=>$this->getDeslogim(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
	}
?>