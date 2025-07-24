<?php
	function includeClasses($className) {
		if(file_exists("classes" . DIRECTORY_SEPARATOR . $className . ".php")) {
			require_once("classes" . DIRECTORY_SEPARATOR . $className . ".php");
		}
	}
?>