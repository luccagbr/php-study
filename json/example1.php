<?php
	$peopleArray = array();

	array_push($peopleArray, array("name" => "Lucca Gabriel", "year" => 24));
	array_push($peopleArray, array("name" => "Fulano", "year" => 20));
	array_push($peopleArray, array("name" => "Ciclano", "year" => 15));
	array_push($peopleArray, array("name" => "Beltrano", "year" => 30));

	// foreach ($people as $key => $value) {
	// 	// code...
	// }

	var_dump(json_encode($peopleArray));
?>