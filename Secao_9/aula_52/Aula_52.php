<?php
	require_once "../../mostraerros.php";

	require_once("config.php");

	use Cliente/Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Djalma Sinddeaux");
	$cad->setEmail("djalma@hcode.br");
	$cad->setSenha("123456");

	//echo $cad;
	echo $cad->registarVenda();
?>