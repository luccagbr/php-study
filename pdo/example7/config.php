<?php
	spl_autoload_register(function($nameClass) {
	$dir = "classes";
	$classesFileName = $dir . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if(file_exists($classesFileName)) {
		require_once($classesFileName);
	}})
?>