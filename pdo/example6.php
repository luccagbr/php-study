<?php
	$host = "localhost";
	$database = "teste";
	$username = "root";
	$password = "dflkdhfsklhfdkls";

	try {
		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Conexão realizada com sucesso!<br><br>";

		$stmt = $connection->prepare("DELETE FROM users WHERE id != 1 AND id > 2");
		$stmt->execute();

		$stmt = $connection->prepare("SELECT * FROM users;");
 		$stmt->execute();

		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data); 
	} catch(Exception $error) {
		echo "<br><br>" . $error->getMessage() . "<br>";
	}
?>