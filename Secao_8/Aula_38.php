<?php
	echo date("d/m/Y H:i:s");

	echo "<br>";

	echo time();

	echo "<br>";
	//$ts = strtotime("2001-09-11");
	//$ts = strtotime("+1 day");
	$ts = strtotime("+1 week");

	echo "<br>";
	echo date("l, d/m/Y", $ts);
?>