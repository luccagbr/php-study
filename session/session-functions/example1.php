<?php
	require_once("config.php");

	echo session_save_path();

	echo "<br><br>";

	switch(session_status()) {
		case PHP_SESSION_DISABLED: {
			echo "A sessão está desabilitada!";
			break;
		};
		case PHP_SESSION_NONE: {
			echo "A sessão não foi definida!";
			break;
		}
		case PHP_SESSION_ACTIVE: {
			echo "A sessão está ativa!";
			break;
		}
	}
?>