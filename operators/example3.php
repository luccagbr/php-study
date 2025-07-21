<?php
	if(isset($_GET['filter']) && isset($_GET['a']) && isset($_GET['b'])) {
		$filter = $_GET['filter'];
		$value_a = $_GET['a'];
		$value_b = $_GET['b'];

		echo "Filtro de: " . $filter;

		if($filter === "FIRST_TOP") {
			if(($value_a <=> $value_b) == 1) {
				echo " - BATEU";
			} else {
				echo " - NÃO BATEU";
			}
		} elseif($filter === "SECOND_TOP") {
			if(($value_a <=> $value_b) == -1) {
				echo " - BATEU";
			} else {
				echo " - NÃO BATEU";
			}
		} else {
			if(($value_a <=> $value_b) == 0) {
				echo " - BATEU";
			} else {
				echo " - NÃO BATEU";
			}
		}
	} else {
		echo "<br>Não foram informados todos os dados";
	}
?>