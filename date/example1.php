<?php
	$birthday_date = strtotime("07-07-2025");

	echo "<br>Timestamp da data: $birthday_date";

	echo "<br><br>Data convertida: " . date("l, d/m/Y", $birthday_date);
?>