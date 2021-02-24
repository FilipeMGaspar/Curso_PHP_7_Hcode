<?php
	session_start();

	echo session_save_path();
	echo "<br>";
	var_dump(session_status());

	echo "<br><br>";
	switch (session_status()) {
		case PHP_SESSION_DISABLE:
			echo "string";
			break;
		
		default:
			# code...
			break;
	}
?>