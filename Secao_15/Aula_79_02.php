<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";

	function trataNome($nome){
		if(!$name){
			throw new Exception("Nenhum nome foi informado.", 1);
			
		}
		echo ucfirst($nome)."<br>";
	}

	try {

		tratanome("João");
		tratanome("");
	}catch(Exception $e){
		echo $e->getMessage();
	}finally{
		echo "Executou o bloco Try";
	}

?>