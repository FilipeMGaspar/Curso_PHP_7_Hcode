<?php
	//Operadores de atribuição
	$nome = "Hcode";
	echo "<h2>Operadores de atribuição</h2>";
	echo $nome . " mais alguma coisa";

	$nome .= " Treinamentos";

	echo "<br>";
	echo $nome;

	echo "<br>";
	$valorTotal = 0;

	$valorTotal += 100;
	$valorTotal += 25;

	echo $valorTotal;
	echo "<br>";
	$valorTotal -= 10;
	echo $valorTotal;
	echo "<br>";
	$valorTotal *= 0.9;
	echo $valorTotal;

	//Operadores Aritméticos
	echo "<h2>Operadores Aritméticos</h2>";

	$a = 10;
	$b = 2;

	echo "Soma = " . ($a + $b);

	echo "<br>Subtração = " . ($a - $b);

	echo "<br> Multiplicação =" . ($a * $b);

	echo "<br>Divisão = " . ($a / $b);

	echo "<br>Resto da divisão = " . ($a % $b);

	echo "<br>Exponenciação = " . $a ** $b;
?>