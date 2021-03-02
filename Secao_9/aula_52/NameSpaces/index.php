<?php
	/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);


	require_once "classes/produto.php";
	require_once "models/produto.php";
	
	use models\Produto as productModel;

	use classes\Produto as productClasses;

	$produto = new productModel();
	$produto->mostrarDetalhes();

	echo "<br><br>";
	$produto2 = new productClasses();
	$produto2->mostrarDetalhes();
?>