<?php
	session_start();

	$idSession = session_id();

	echo "Sessão iniciada!<br><br>";
	echo "Id da sessão: $idSession <br><br>";
?>