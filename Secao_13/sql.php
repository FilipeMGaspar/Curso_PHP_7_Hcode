<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
//Aula_64 -> PDO - DAO - Data Access Object
	
	class Sql extends PDO {//sql recebe o prepare bindParam por herança do PDO

		private $conn;

		//Método construtor responsável pela ligação á base de dados
		public function __construct(){
			$this->conn = new PDO("mysql:host=localhost;dbname=db_php7, 'admin', '123'"); 
		}

		//Método privado para relacionar os dados recebidos com os valores a serem inseridos na tabela
		private function setParams($statment, $parameters = array()){
			foreach ($parameters as $key => $value) {
				$this->setParam->bindParam($key, $value);
			}
		}

		
		//Método privado para receber cada um dos parametros
		private function setParam($statment, $key, $value){
			$statment->bindParam($key, $value);
		}


		//Método resposável por preparar as ações a serem efectuadas no banco de dados: INSERT; UPDATE; DELETE; ....
		public function query($rawQuery, $params = array()){

			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;
		}

		public function select($rawQuery, $params = array()):array{
			$stmt = $this->query($rawQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>