<?php

	$a = (int)$_GET["a"];
	$b = (int)$_GET["b"];
	//var_dump($nome);

	echo $a;
	echo "<br>";
	echo $b;
	echo "<br><br>";

	$ip = $_SERVER["REMOTE_ADDR"];
	echo $ip;
	echo "<br><br>";

	$ip = $_SERVER["SCRIPT_NAME"];
	echo $ip;
	echo "<br><br>";

?>