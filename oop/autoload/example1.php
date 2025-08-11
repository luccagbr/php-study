<?php
	require_once("utils/autoload.php");

	spl_autoload_register("includeClasses");

	$boderCollie = new Dog("Estrela", "Boder Collie", "25kg");

	echo $boderCollie->grunt();
?>