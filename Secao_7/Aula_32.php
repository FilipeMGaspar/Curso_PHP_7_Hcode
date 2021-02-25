<?php
	function ola(){
		//echo "Olá Mundo!<br>";
		return "Olá Mundo!!!<br>";
	}

	function salario(){
		return 756;
	}

	echo ola();
	$frase = ola();

	echo strlen($frase)."<br>";

	echo "<br> José recebeu 3 salários: ".salario() * 3;
?>