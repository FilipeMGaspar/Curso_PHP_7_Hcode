<?php
	session_start();

	echo session_save_path();
	echo "<br>";
	var_dump(session_status());

	echo "<br><br>";
	switch (session_status()) {
		case PHP_SESSION_DISABLE:
			echo "A sua sessão encontra-se desativada";
			break;
		case PHP_SESSION_NONE:
			echo "Sessão habilitada mas não iniciada";
				break;
		case PHP_SESSION_ACTIVE:
			echo "Sessão Activa, seja bem vindo";
			break;
	}
?>