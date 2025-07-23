<?php
	$people = array();

	function implementPerson($action, $person, &$arrayPeople) {
		if($action === "CREATE") {
			array_push($arrayPeople, $person);
		} else {
			echo "<br><br>Nenhuma action informada.";
		}
	}


	implementPerson("CREATE", array("name" => "Lucca Gabriel", "birthday_date" => new DateTime(), "sex" => "Male"), $people);

	echo "PASSOU<br><br>";
	print_r($people);
	echo "<br><br>";

	foreach($people as $index => $person) {
		echo "$index - ";
		foreach($person as $key => $property) {
			$format = "$key ";

			if(gettype($property) === "object") {
				if($property instanceof DateTime) {
					$format = $format . " " . date_format($property, "c");
				} else {
					foreach($property as $value) {
						$format += "" . $value;
					}
				}
			} else {
				$format = $format . " " . $property;
			}

			echo $format . " ";
		}
	}
?>