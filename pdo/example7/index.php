<?php
	require_once("./config.php");

	$host = "localhost";
	$database = "users_control";
	$username = "root";
	$password = "";

	try {
		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Conexão bem sucedida<br><br>";
		
		$person = new People("Lucca Gabriel", "23942378923", "teste@lucca.com");

		echo "<br><br>";
		var_dump($person);

		if(!$person) {
			throw new Exception("Não foi possível criar pessoa!");
		}

		$connection->beginTransaction();

		$stmt = $connection->prepare("INSERT INTO people (name, email, birthday_date) VALUES (:name, :email, :birthday_date);");

		$stmt->bindParam(":name", $person->getName());
		$stmt->bindParam(":email", $person->getEmail());
		$stmt->bindParam(":birthday_date", $person->getBirthdayDate());

		$connection->commit();

		$stmt->execute();

		$stmt = $connection->prepare("SELECT * FROM people");

		$stmt->execute();

		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	} catch(Exception $error) {
		echo "<br>";
		var_dump($error);
		echo "<br>";
		echo "<br><br>" . $error->getMessage() . "<br>";
	}
?>