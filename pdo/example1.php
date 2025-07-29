<?php
	$connection = new PDO("mysql:dbname=users_control;host=localhost", "root", "");

	$stmt = $connection->prepare("SELECT * FROM users");

	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach($result as $row) {
		foreach($row as $key => $value) {
			echo "<strong>" . $key . ":</strong> " . $value . "<br>";
		}

		echo "=================================<br>";
	}
?>