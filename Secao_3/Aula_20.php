<?php
	$qualAsuaIdade = 25;
	
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if($qualAsuaIdade < $idadeCrianca){
		echo "Criança";
	}else if($qualAsuaIdade < $idadeMaior){
		echo "Adolecente";
	}else if($qualAsuaIdade < $idadeMelhor){
		echo "Adulto";
	}else{
		echo "Idoso";
	}
?>