<?php
//Incluir script que permite mostrar os erros
//require_once "../mostraerros.php";

	function trataNome($nome){
		
		echo ucfirst($nome)."<br>";

		if($name == ""){
			throw new Exception("Nenhum nome foi informado.", 1);			
		}
		
		//echo ucfirst($nome)."<br>";
	}

	try {
		trataNome("João");
		//trataNome("");
	}catch(Exception $e){
		echo $e->getMessage();
	}finally{
		echo "<br>Executou o bloco Try";
	}

?>