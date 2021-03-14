<?php
//Incluir script que permite mostrar os erros
require_once "../mostraerros.php";
	
	try{
		throw new Exception("Houve um erro.", 400);
		
	} catch (Exception $exp){
		
	}
?>