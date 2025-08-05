<?php
	$name = NULL;

	if(isset($_GET['a'])) {
		$name = (int)$_GET['a'];
	} else {
		unset($name);
	}

	if(isset($name)) {
		var_dump($name);
	} else {
		echo "A variável não existe";
	}

	$ip = $_SERVER["SERVER_ADDR"];

	echo "<br/>";

	var_dump($ip);
?>