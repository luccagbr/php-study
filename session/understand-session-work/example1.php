<?php
	session_start();

	$_SESSION['name'] = "Lucca";

	session_unset();

	echo "Teste<br><br>";
?>