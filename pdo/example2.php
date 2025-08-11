<?php
	$server = "localhost";
	$database = "teste";
	$username = "sa";
	$password = "teste";

	try {
		$connection = new PDO("sqlsrv:Server=$server;Encrypt=0;TrustServerCertificate=1", $username, $password);

		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Conexão bem sucedida!<br><br>";

		$stmt = $connection->prepare("SELECT * FROM users;");

		$stmt->execute();

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($results);
	} catch(PDOException $error) {
		echo "Erro na conexão: " . $error->getMessage();
	}
?>