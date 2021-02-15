<?php
	//Tipos de Dados em PHP

	//tipos básicos de dados
	$nome = "Hcode";//string
	$site = 'www.hcode.com.br';//string

	$ano = 1990;//int

	$salario = 550.55;//double, float

	$bloqueado = false;//boleano


	//************ *******************
	//Tipos de dados compostos
	$frutas = array("abacaxi","laranja","manga");

	echo $frutas[2];

	$nascimento = new DateTime();//Orientação a objecto
	echo "<br><br>";
	var_dump($nascimento);
	echo "<br><br>";

	////////////////////////////////////////
	//Tipos de dados especiais
	$arquivo = fopen("Aula_14.php", "r");
	var_dump($arquivo);
	echo "<br><br>";

	$nula = null;
	var_dump($nula);
?>