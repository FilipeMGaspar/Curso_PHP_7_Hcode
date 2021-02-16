<?php
	//Operadores de atribuição
	$nome = "Hcode";
	echo "<h2>Operadores de atribuição</h2>";
	echo "<br><br>";
	echo $nome . " mais alguma coisa";

	$nome .= " Treinamentos";

	echo "<br><br>";
	echo $nome;

	echo "<br><br>";
	$valorTotal = 0;

	$valorTotal += 100;
	$valorTotal += 25;

	echo $valorTotal;
	echo "<br><br>";
	$valorTotal -= 10;
	echo $valorTotal;
	echo "<br><br>";
	$valorTotal *= 0.9;
	echo $valorTotal;

	//Operadores Aritméticos
	echo "<br><br>";
	echo "<h2>Operadores Aritméticos</h2>";

	$a = 10;
	$b = 2;

	echo "Soma = " . ($a + $b);

	echo "<br><br>Subtração = " . ($a - $b);

?>