<?php
	$connection = new mysqli("localhost", "root", "", "users_control");

	var_dump($connection);
	echo "<br><br>";

	if($connection->connect_error) {
		echo "Error: " . $connection->connect_error;
	}

	$result = $connection->query("SELECT * FROM users");

	echo "<br>";
	var_dump($result);
	echo "<br>";

	$data = array();

	while($row = $result->fetch_assoc()) {
		array_push($data, $row);
	}

	echo json_encode($data);
?>