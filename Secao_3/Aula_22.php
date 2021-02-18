<?php
for ($i = 0; $i<=100; $i+=5) {
	
	if ($i > 55 && $i < 75) continue;

	if ($i === 95) break;
	
	echo $i." - ";
}
echo " Fim!";
?>