<?php
	$host = "localhost";
	$database = "teste";
	$username = "root";
	$password = "root";

	try {
		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Conexão realizada com sucesso!<br><br>";

		$stmt = $connection->prepare("INSERT INTO users (email_institutional, password) VALUES (:login, :password);");

		$login = "test@test.com";
		$pass = "kdfhsdkfh";

		$stmt->bindParam(":login", $login);
		$stmt->bindParam(":password", $pass);

		$stmt->execute();

		$stmt = $connection->prepare("SELECT * FROM users;");

 		$stmt->execute();

		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($data);

	} catch(Exception $error) {	
		echo "Erro ao conectar: " . $error->getMessage() . "<br>";
	}
?>