<?php
	$anoNascimento = 1990;
	$nomeCompleto= "Antonio dos Santos";

	$nome1= "João";

	$sobrenome = "Rangel";

	$nomeCompleto = $nome1 . " " .  $sobrenome;//Concatenação de duas string

	echo $nomeCompleto;

	exit;

	echo $nome1;

	echo "<br>";

	unset($nome1);

	if (isset($nome1) ) {
		echo $nome1;
	}
	
	//$1nome = "João"; //Declaração incorrecta não deve inicair as variaveis com números
	//$%nome = "João"; //Declaração incorrecta Não utilize caracteres especiais

	//não pode utilizar variaveis com no de palavras reservadas ao PHP

	//Comentário de uma linha

	/*
	*Comentário de
	*Multiplas linhas
	*Utilize com resposabilidade
	*/
?>