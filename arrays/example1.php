<?php
	$fruits = array("Grape", "Orange", "Lemon", "Pineapple");

	echo "FRUTAS";
	echo "<br>";

	foreach($fruits as $index => $fruit) {
		echo $fruit;
		echo "<br>";
	}

	echo "<br><br>";
	echo "CARROS";
	echo "<br>";

	$cars[0][1] = "Focus";
	$cars[0][2] = "Fusion";
	$cars[0][3] = "Ká";
	$cars[0][4] = "Edge";
	$cars[0][5] = "Fiesta";

	$cars[1][0] = "Corsa";
	$cars[1][1] = "Celta";
	$cars[1][2] = "Onix";
	$cars[1][3] = "Vectra";
	$cars[1][4] = "Agile";

	foreach($cars as $indexType => $carType) {
		echo "<br>";
		echo "Tipo de carro $indexType";
		echo "<br>";
		foreach($carType as $indexCar => $car) {
			echo $car;
			echo "<br>";
		}
	}
?>