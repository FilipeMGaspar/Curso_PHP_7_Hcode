<?php
	//Incluir o mostrar erros
	require_once "../mostraerros.php";

	//coneção ao banco de dados em pdo
	$conect = new PDO("mysql:dbname=db_php7;host=localhost", "admin", "123");

	$stmt = $conect->prepare("SELECT * FROM tb_usuarios ORDER BY deslogim");

	$stmt->execute();

	$results = $stmt->fetchAll();

	var_dump($results);

	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>".$key ."</strong>" .$value . "<br>";
		}
		echo "*******************************<br>";
	}

?>