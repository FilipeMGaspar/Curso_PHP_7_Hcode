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

		public function inserir(){
			$sql = new sql();
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				":LOGIN"=>$this->getDeslogim(),
				":PASSWORD"=>$this->getDessenha()
			));

			if(count($results) > 0){
				$this->setData($results[0]);
			}
		} 

		public function __construct($login= "", $password= ""){
			$this->setDeslogim($login);
			$this->setDessenha($password);
		}
		//Fim Aula 67


		//Aula 68
		public function update($login, $password){

			$this->setDeslogim($login);
			$this->setDessenha($password);

			$sql = new sql();

			$sql->query("UPDATE tb_usuarios SET deslogim= :LOGIN, dessenha= :PASSWORD WHERE idusuario= :ID",array(
				":LOGIN"=>$this->getDeslogim(),
				":PASSWORD"=>$this->getDessenha(),
				":ID"=>$this->getIdusuario()
			));
		}	
		//Fim Aula 68

		//Aula 69
		public function delete(){
			$sql = new sql();

			$sql->query("DELETE FROM tb_usuarios WHERE idusuario= :ID", array(
				":ID"=>$this->getIdusuario()
			));

			$this->setIdusuario(0);
			$this->setDeslogim("");
			$this->setDessenha("");
			$this->setDtcadastro(new DateTime());
		}
		//Fim Aula 69

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