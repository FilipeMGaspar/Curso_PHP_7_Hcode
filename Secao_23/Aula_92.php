<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$id = (isset($_GET["id"])?$_GET["id"]:1);

	$conn = mysqli("localhost" , "admin", "123", "db_php7");

	$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

	$exec = mysqli_query($conn, $sql);
?>