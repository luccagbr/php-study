<?php
	session_start();

	if(isset($_SESSION["name"])) {
		echo "A sessão iniciou";
	}
?>