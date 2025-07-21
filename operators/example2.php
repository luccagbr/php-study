<?php
	$totalValue = 100.50;
	$condition = NULL;

	if(isset($_GET['condition'])) {
		$condition = $_GET['condition'];

		if($condition == "SUBTRACTION") {
			$totalValue -= 20;
		} elseif ($condition == "ADD") {
			$totalValue += 30;
		} elseif ($condition == "MULTIPLY") {
			$totalValue *= 2;
		} else {
			$totalValue /= 2;
		}
	} else {
		echo "Não foi informada uma condição";
	}

	echo "<br/>" . $totalValue;
?>