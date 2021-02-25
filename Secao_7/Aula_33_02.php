<?php
	function teste(){
		$argumentos = func_get_arg();
		return $argumentos;
	}

	echo "<br><br>";
	var_dump(teste("aaaaaa"));
	echo "<br><br>";
	var_dump(teste(123));
?>