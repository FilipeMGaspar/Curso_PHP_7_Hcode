<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	$pasta = "arquivos";

	if(!is_dir($pasta)){
		mkdir($pasta);
	}

	echo "Directório criado com sucesso!";

	// 0 até 7

	/*
		0 - Nenhuma permissão
		1 - Permissão de Executar
		2 - Permissão de gravação
		3 - 1 + 2 Executar + gravar
		4 - Permissão só de leitura
		5 - Leitura + execução
		6 - Leitura e gravação
		7 - Permissão total leitura, execução e gravação 
	*/
?>