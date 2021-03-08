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
				$this->setData($results[0]);
			}
		}

		//Aula66 -> Adicionado durante esta aula
		public static function getList(){
			$sql = new sql();

			return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogim");
		}

		public static function search($login){
			$sql = new sql();

			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogim like :SEARCH ORDER BY deslogim", array(
			':SEARCH'=>'%'.$login.'%'));
		}

		public function login($login, $password){

			$sql = new sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogim= :LOGIN AND dessenha= :PASSWORD", array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password
			));

			if(count($results) > 0) {
				$this->setData($results[0]);
				
			} else {
				throw new Exception("Login e/ou senha inválidos!");
			}		
		}

		//AULA 67 
		public function setData($data){
			$this->setIdusuario($data['idusuario']);
			$this->setDeslogim($data['deslogim']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime(($data['dtcadastro'])));
		}

		public functio inserir(){
			$sql = new sql();
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				":LOGIN"=>$this->getDeslogim(),
				":PASSWORD"=>$this->getDessenha()
			));
		} 
		//Fim Aula 67


		//Aula65
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