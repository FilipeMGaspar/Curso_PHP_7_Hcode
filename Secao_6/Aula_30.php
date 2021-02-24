<?php
	session_id('ln6rl1l9kl5koqerg8vjd4gk4r');
	
	session_start();

	echo session_id();

	echo "<br>";

	session_regenerate_id();
	echo "<br>".session_id();

	echo "<br>";
	var_dump($_SESSION);
?>