<?php
	$global_variable = "global";

	function escopeOne() {
		global $global_variable;

		$global_variable = "local 1";

		echo "<br/>" . $global_variable;
	}

	function escopeTwo() {
		global $global_variable;

		$global_variable = "local 2";

		echo "<br/>" . $global_variable;
	}	

	echo $global_variable;

	escopeOne();
	escopeTwo();
?>