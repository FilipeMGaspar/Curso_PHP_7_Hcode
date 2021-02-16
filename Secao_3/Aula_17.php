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

	//operadores relacionais
	echo "<h2>Operadores Relacionais</h2>";
	$a = "55";
	$b = 55;

	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
	echo "<br>";
	var_dump($a == $b);
	echo "<br>";
	var_dump($a === $b);
	echo "<br>";
	var_dump($a != $b);
	echo "<br>";
	var_dump($a !== $b);

	//Spaceship Operator
	echo "<h2>Spaceship Operator</h2>";
	$a = 25;
	$b = 60;
	var_dump($a <=> $b);
	echo "<br>";

	//Operador Not Null
	echo "<h2>Operador Not Null</h2>";

	$a = NULL;
	$b = 11;
	$c = 5;

	echo $a ?? $b ?? $c;

	//Operadores de incremento e decremento;
	echo "<h2>Operador de Incremento e Decremento</h2>";
	$a = 10;

	echo $a++;//Incremento pós incremento
	echo "<br>".$a;

	echo "<br>". --$a;// Decremento pré decremento
	echo "<br>". $a;

	//Precedencia de operadores
	echo "<h2>Precedencia de operadores</h2>";

	$resultado = (10 + 3) /2 > 5 && 10 + 5 < 3;
	var_dump($resultado);
?>