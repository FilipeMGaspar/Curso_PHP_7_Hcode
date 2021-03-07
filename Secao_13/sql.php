<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
//Aula_64 -> PDO - DAO - Data Access Object
	
	class Sql extends PDO {//sql recebe o prepare bindParam por herança do PDO

		private $conn;

		public function __construct(){
			$this->conn = new PDO();
		}
	}
?>