<?php
	session_start();

	echo session_save_path();
	echo "<br>";
	var_dump(session_start());
?>