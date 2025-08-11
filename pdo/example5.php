<?php
	$host = "localhost";
	$database = "teste";
	$username = "root";
	$password = "fdsfjsdhfjkdhdasjkda";

	try {
		$params = $_GET;

		if(!isset($_GET["user_id"])) {
			throw new Exception("<br>Nenhum usuário informado!<br>");
		}

		if(!isset($_GET["new_email_institutional"])) {
			throw new Exception("<br>Não foi informado o e-mail de substituição!<br>");
		}

		if(!isset($_GET["password"])) {
			throw new Exception("<br>Não foi informada a nova senha do usuário!<br>");
		}


		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Conexão realizada com sucesso!<br><br>";

		$stmt = $connection->prepare("UPDATE users SET email_institutional = :new_email_institutional, password = :password WHERE id = :user_id");

		$stmt->bindParam(":new_email_institutional", $params["new_email_institutional"]);
		$stmt->bindParam(":password", $params["password"]);
		$stmt->bindParam(":user_id", $params["user_id"]);

		$stmt->execute();

		$stmt = $connection->prepare("SELECT * FROM users;");
 		$stmt->execute();

		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
	} catch(Exception $error) {
		echo "<br><br>" . $error->getMessage() . "<br>";
	}
?>