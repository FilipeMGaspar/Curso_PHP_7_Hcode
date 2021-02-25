<?php
	function ola(){
		$argumentos = func_get_arg();
		//var_dump($argumentos);
		return $argumentos;
	}

	echo "<br><br>";
	var_dump(ola("teste"));
	/*
	echo "<br><br>";
	var_dump(teste(123));
	*/
?>