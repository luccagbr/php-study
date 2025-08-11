<?php
	$encodeJsonPeople = '[{"name":"Lucca Gabriel","year":24},{"name":"Fulano","year":20},{"name":"Ciclano","year":15},{"name":"Beltrano","year":30}]';

	echo "Json codificado<br>";
	echo $encodeJsonPeople;

	echo "<br><br>";
	echo "Json decodificado para array novamente<br>";
	$decodeJson = json_decode($encodeJsonPeople, true);

	print_r($decodeJson[1]["name"]);
?>