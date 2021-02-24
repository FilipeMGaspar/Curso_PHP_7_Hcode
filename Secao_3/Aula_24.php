<?php
	$condicao = true;

	while ($condicao) {
		$numero = rand(1, 10);

		if($numero === 3){
			echo "TRÊS!!!";
			$condicao = false;
		}

		if ($numero != 3) {
			echo $numero . " - ";
		}	
	}

	//Exemplo 

	$total = 150;
	$deconto = 0.9;

	do {
		$total *= $deconto;
	}while ($total > 100);

	echo "<br><br>Valor Total: ".$total;
?>