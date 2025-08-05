<?php
	$connection = new mysqli("localhost", "root", "", "users_control");

	if($connection->connect_error) {
		echo "Error: " . $connect_error; 
	}

	$stmt = $connection->prepare("INSERT INTO users (email_institutional, password) VALUES (?, ?)");

	$stmt->bind_param("ss", $email_institutional, $password);

	$email_institutional = "luccagabriel.dev@grupofaveni.com.br";
	$password = "23897482397";

	$stmt->execute();
?>