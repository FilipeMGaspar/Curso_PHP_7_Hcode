<?php
for ($i = 0; $i<=100; $i+=5) {
	
	if ($i > 55 && $i < 75) continue;

	if ($i === 95) break;

	echo $i." - ";
}
echo " Fim!<br><br>";

echo "<select>";
for ($i = date("Y"); $i >= date("Y") - 100 ; $i-- ) { 
	echo '<option value="'. $i . '">'. $i .'</option>';
}
echo "</select>";
/*
//Não fazer ou derruba o servidor
for ($i=0; $i < 10 ; $i--) { 
	echo $i ."  ";
}
*/

/*
//Outra maneira de fazer
echo "Ano atual -> ".date("Y");

$anoAtual = date("Y");

for ($i = $anoAtual; $i > $anoAtual - 100; $i--) {
	echo $i. "  ";
}
*/

?>