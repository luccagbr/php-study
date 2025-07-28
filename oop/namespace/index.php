<?php
	require_once("config.php");

	$user = new User("luccavitalc@gmail.com", "102035", Array("name" => "Lucca Gabriel", "birthday_date" => new DateTime()));


	echo $user;
?>