<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$id = (isset($_GET["id"]));

	$conn = mysqli("localhost" , "admin", "123", "db_php7");

	$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
?>