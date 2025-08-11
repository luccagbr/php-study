<?php
	$people = array();

	array_push($people, "Lucca");
	array_push($people, "Fulano");
	array_push($people, "Ciclano");
	array_push($people, "Beltrano");

	foreach($people as $index => $person) {
		var_dump($person);
	}
?>