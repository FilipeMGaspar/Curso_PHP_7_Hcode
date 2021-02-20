<?php
	$meses = array('Janeiro', "Fevereiro",
"Março", "Abril", "Maio", "Junho",
"Julho", "Agosto", "Setembro", "Outubro",
"Novembro", "Dezembro");

	foreach ($meses as $mes) {
		echo "O mês de: ".$mes."<br>";
	}

	echo "<br>";
	foreach ($meses as $index => $mes) {
		echo $index." º mês ". $mes."<br><br>";
	}
?>