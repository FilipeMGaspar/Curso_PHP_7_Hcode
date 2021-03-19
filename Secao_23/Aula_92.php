<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$id = (isset($_GET["id"]))?$_GET["id"]:7;

	if(!is_numeric($id) || strlen($id) > 5){
		exit("Foste Apanhado!");
	}

	$conn = mysqli_connect("localhost" , "admin", "123", "db_php7");

	$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

	$exec = mysqli_query($conn, $sql);

	while($resultado = mysqli_fetch_object($exec)) {
		echo $resultado->deslogim ."<br>";

	}
?>